## Seamless Affinidi Login Integration in Laravel

Building a Laravel Web Application with Affinidi Login Integration via Socialite.

## Prerequisites
Your local machine should have [PHP 8.1](https://www.php.net/downloads) and [Composer](https://getcomposer.org/download/) installed.

## Learning 

**Laravel**
Laravel is a web application framework with expressive, elegant syntax. 
Laravel is accessible, powerful, and provides tools required for large, robust applications.

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs).

**Socialite**

 Laravel also provides a simple, convenient way to authenticate with OAuth providers using [Laravel Socialite](https://laravel.com/docs/10.x/socialites).

<br>

## Download Base Reference Application

Clone this repo using below command or download zip file [here](https://github.com/kamarthiparamesh/affinidi-laravel-reference-app/archive/refs/heads/main.zip)

```
git clone https://github.com/kamarthiparamesh/affinidi-laravel-reference-app.git
```

## Setup & Run application

Open the dowloaded directory `affinidi-laravel-reference-app` in VS code or your favorite editor

 1. Install the dependencies by executing the below command in terminal
    ```
    composer install
    ```
 2. Create the `.env` file in the sample application by running the following command
    ```
    cp .env.example .env
    ```
 3. Create [Affinidi Login Configuration](https://docs.affinidi.com/docs/affinidi-login/login-configuration/#create-login-configuration) by giving name as `Laravel App` and `Redirect URIs` as `http://localhost:8000/login/affinidi/callback`. Sample response is given below
    ```
    {
        ...
        "auth": {
            "clientId": "<AUTH.CLIENT_ID>",
            "clientSecret": "<AUTH.CLIENT_SECRET>",
            "issuer": "https://<PROJECT_ID>.apse1.login.affinidi.io"
        }
        ...
    }
    ```
    **Important**: Safeguard the Client ID and Client Secret and Issuer; you'll need them for setting up your environment variables. Remember, the Client Secret will be provided only once.

    **Note**: By default Login Configuration will requests only `Email VC`, if you want to request email and profile VC, you can refer PEX query under `docs\loginConfig.json` and execute the below affinidi CLI command to update PEX
    ```
    affinidi login update-config --id <CONFIGURATION_ID> -f docs\loginConfig.json
    ```
 
 4. Update below environment variables in `.env` based on the auth credentials received from the Login Configuration created earlier:
    ```
    AFFINIDI_CLIENT_ID="<AUTH.CLIENT_ID>"
    AFFINIDI_CLIENT_SECRET="<AUTH.CLIENT_SECRET>"
    AFFINIDI_ISSUER="<AUTH.CLIENT_ISSUER>"
    ```
    Sample values looks like below
    ```
    AFFINIDI_CLIENT_ID="xxxxx-xxxxx-xxxxx-xxxxx-xxxxx"
    AFFINIDI_CLIENT_SECRET="xxxxxxxxxxxxxxx"
    AFFINIDI_ISSUER="https://yyyy-yyy-yyy-yyyy.apse1.login.affinidi.io"
    ```
5. Run the application
    ```
    php artisan serve
    ```
6. Open the [http://localhost:8000/](http://localhost:8000/), which displays login page 
    **Important**: You might error on redirect URL mismatch if you are using `http://127.0.0.1:8000/` instead of `http://localhost:8000/`. 
7. Click on `Affinidi Login` button to initiate OAuth2 login flow with Affinidi Vault


<br/>
<br/>
<br/>

## Important Snippets

If you want to start fresh without any base reference app, then you can follow the below steps

### Create Laravel Project
Before creating your first Laravel project, you should ensure that your local machine has `PHP` and `Composer` installed.

1. You may create a new Laravel project via the Composer `create-project` command
```
composer create-project laravel/laravel example-app
```

**Note**: If you enounter any issue on creating project like `fileInfo`, then you may have enable the fileInfo extension in your `php.ini` file like below
```
extension=fileinfo
```
2. After the project has been created, start Laravel's local development server using the Laravel's Artisan CLI `serve` command
```
cd example-app
 
php artisan serve
```
3. Once you have started the Artisan development server, your application will be accessible in your web browser at [http://localhost:8000](http://localhost:8000)

**Note**: If you enounter an error on generating Key, then execute the below command which updates `APP_KEY` in your .env file and then run the app
```
php artisan key:generate
```

### Install Socialite
To get started with Socialite, use the Composer package manager to add the package to your project's dependencies
```
composer require laravel/socialite
```

### Add Socialite Custom Provider
Socialite currently supports authentication via Facebook, Twitter, LinkedIn, Google, GitHub etc.

Follow the below steps to add custom `Affinidi` OAuth2 provider

1. Create `AffinidiProvider.php` file under `app\Providers\` which inherits from Socialite `AbstractProvider`
```
<?php

namespace App\Providers;

use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;
use Illuminate\Support\Arr;

class AffinidiProvider extends AbstractProvider implements ProviderInterface
{
    /**
     * The separating character for the requested scopes.
     *
     * @var string
     */
    protected $scopeSeparator = ' ';
    protected $usesPKCE = true;

    /**
     * The scopes being requested.
     *
     * @var array
     */
    protected $scopes = [
        'openid',
        'offline_access',
    ];

    public function getIssuerUrl()
    {
        return config('services.affinidi.base_uri');
    }

    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase($this->getIssuerUrl() . '/oauth2/auth', $state);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return $this->getIssuerUrl() . '/oauth2/token';
    }

    private function extractProps($data, $names)
    {
        $values = [];
        if (!is_array($names)) {
            $names = [$names];
        }
        foreach ($data as $customData) {
            foreach ($names as $name) {
                if (isset($customData[$name])) {
                    $values[$name] = $customData[$name];
                }
            }
        }
        return $values;
    }

    /**
     * {@inheritdoc}
     */
    protected function getUserByToken($token)
    {
        // get the user details from ID token
        $info = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $token)[1]))), true);
        $custom = $info['custom'];
        $values = $this->extractProps($custom, [
            'email',
            'name',
            'givenName',
            'familyName',
            'middleName',
            'nickname',
            'picture',
            'gender',
            'birthdate',
            'phoneNumber',
            'address'
        ]);
        unset($info['custom']);
        $user = array_merge($info, $values);

        return $user;
    }

    public function user()
    {
        if ($this->user) {
            return $this->user;
        }

        if ($this->hasInvalidState()) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'error' => 'Error: Invalid State',
            ]);
            throw $error;
        }

        $code = $this->getCode();

        if (!isset($code)) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'error' => 'Error : ' . $this->request->input('error') . ' -> ' . $this->request->input('error_description'),
            ]);
            throw $error;
        }

        $response = $this->getAccessTokenResponse($code);

        $user = $this->getUserByToken(Arr::get($response, 'id_token'));

        return $this->userInstance($response, $user);
    }

    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        $user['id'] = Arr::get($user, 'sub');

        return (new User)->setRaw($user)->map([
            'id' => Arr::get($user, 'sub'),
            'nickname' => Arr::get($user, 'nickname'),
            'name' => Arr::get($user, 'name'),
            'email' => Arr::get($user, 'email'),
        ]);
    }
}
```

2. Open `AppServiceProvider.php` file under `app\Providers`, and bootrap the custom provider with name `affinidi` inside function `boot()`, the code should look like below 
```
public function boot(): void
{
    $socialite = $this->app->make(Factory::class);

    $socialite->extend('affinidi', function () use ($socialite) {
        $config = config('services.affinidi');
        return $socialite->buildProvider(AffinidiProvider::class, $config);
    });
}
```
3. Add credentials for the OAuth2 affinidi provider, should be placed in your application's `config/services.php` configuration file,
```
'affinidi' => [
    'base_uri' => env('AFFINIDI_ISSUER'),
    'client_id' => env('AFFINIDI_CLIENT_ID'),
    'client_secret' => env('AFFINIDI_CLIENT_SECRET'),
    'redirect' => '/login/affinidi/callback',
],
```

To authenticate users using an OAuth provider, you will need two routes: one for redirecting the user to the OAuth provider, and another for receiving the callback from the provider after authentication. The example routes below demonstrate the implementation of both routes:

```
Route::get('/auth/redirect', function () {
    return Socialite::driver('affinidi')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('affinidi')->user();

    //save user

    //Set auth login
    Auth::login($userModal); 
    
    //redirect
    return redirect('/dashboard');
});
```

### Use Affinidi Provider Inside Controller

1. Create `LoginRegisterController.php` file under `app\Http\Controllers`, which has actions to perform normal login, logout, affinidi login and its callback.
```
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginRegisterController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        if (session("user")) {
            return view('dashboard');
        }

        return redirect()->route('login')
            ->withErrors([
                'email' => 'Please login to access the home.',
            ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
        ;
    }

    public function affinidiLogin(Request $request)
    {
        return Socialite::driver('affinidi')->redirect();
    }

    public function affinidiCallback(Request $request)
    {
        try {
            $user = Socialite::driver('affinidi')->user();

            session(['user' => $user]);

            return redirect()->intended('home');
        } catch (\Exception $e) {
            return redirect()->route('login')
                ->withError($e->getMessage());
        }
    }
}
```
2. Open `routes\web.php` file and Add Web Routes which invokes the above login controller actions. File looks like below
```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

Route::get('/', function () {
    return view('login');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::get('/home', 'home')->name('home');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/login/affinidi', 'affinidiLogin')->name('affinidi-login');
    Route::get('/login/affinidi/callback', 'affinidiCallback')->name('affinidi-callback');
});

```
3. Create file `login.blade.php` under `resources\views` for adding Affinidi Login button
```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
        .body {
            padding: 1rem;
        }

        .affinidi-login-div {
            width: 300px;
        }

        .affinidi-login-button {
            border: 0;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15rem;
            height: 2rem;
            cursor: pointer;
            background: #1d58fc;
            color: #fff;
            box-shadow: 0 4px 16px 0 rgba(55, 62, 151, 0.32);
        }

        .affinidi-login-img {
            margin-right: 1rem;
            width: 24px;
            height: 24px;
        }
    </style>
</head>

<body>
    <div class="card-body">
        <h2 class="h4 mb-1">Sign in</h2>
        <hr class="mt-2">
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="affinidi-login-div">
            <a class="btn affinidi-login-button" href="/login/affinidi">
                <img alt="logo affinidi" class="affinidi-login-img"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAExUlEQVRoge2ZT2iURxjGf+/styZmq1WjiSQbkSYYCwVrRNCDUJUehEqhQrSHilpq1UsvxYMglUov0ksp2CoE+8eDUPDQQy/9Z/9SWoyeihW1rckGjTVWaVw3uztPD18SNcluvk2yyR7ywMB++80z87zzzbzvvDMwi1lMCjZF7cSgJQH354SPNQNwpR/IR2+iPgEkwBSdE+QnaEBDDbi1YBswrQGWA7VA1WCFDNAH/IXsPOgHyP4GN/sLt9l4CGeHgPsRRcQQV4MShbfi3B7ENqAZVGzAmoBVwIvhY/waljyL9x3Qc2lUbWfzEAlQIpIUA7C7LprwZCOu8TjmLiAOYmrGiop/pCMNlaeQ3sTcBVzyBDQmR1T02KCwKCVEPoIBja9gdILtxzS3pCk6yhgDUzXSXsw6oWnXxBsLUcSANfFw1PkEUx1MQvgwBtswwLQE06nwawAoN4E+rMAaaJmP9Z5GtvXRfssCsRe3bCH+eg/UgKsFRe+wgBdqrAV7BpSZIpnjIGULNv+0Pt395e+ZP47chuUxyI5HMiA9DeKioe5lHavfoY5SeRG9UPlhyuWk/J4l23O7S+FVjAFeeCQMHWvYoaaovIoxICbnAQxbnPP5w1F5g16oqRnT+0CM8vqcsaHufPqfX1ur69aB8oB2xlccXp69fDSPJQs4GjmM7tAAx6ugLdOneKQW8Nl7w4/mgqq5S597Pnv56KCfLDCmsi4H9Qmkl6ZF6Jgihn6EIV4SSMxZtEo2b4Pwd4qxMw6CdcCKMsuMDDMDPLGqhRZPbhH0U2zX73BuU9EaMwBJYI6q2tXj1g2QNoasmbJhaA6NFhAkmkIvKc8ohxnWnhsgTgGfMxPe56GSgXhi2QtIm4b/kydINPZS3fYeDy7moOFxA4WB+ipm6izdoSPe594yLPwWEmbu76f3uZZzGy1XiFcxgSzvc/HhpTi8G1XNpeMsLMarGAMmiooxIOaC7MOEZ2hm2/2VBygaCAJIvkZ4ojBDixige2Dg30sb4k+2An5o/uOz96rPbdl8ENzoRRyu9L4AYzewfgZUD0IgyPZfJ75g5cNhNEeuP1XPg853sIbRNANkPQFm3yKtn1SyPhk8vpV4bJRz/V1hADBHgQmSdnj/TaG3MwWzMA5kbl8Yt66D3C/A5fLLigZJgCOfuaNs1xcGT1BsfB3c7Mfs7LQpHInhSRNuJcwMzBjou2j670fDLSjGrgrzAU8HZs8yUwkN5F18fivQDCCfy6RvfPc9kA+3DGNtGMKEZlpVFsPS9vzbde1Z1W/Pqa49dzIqr2ICWd68AxC6FbjY0ai8Ek+nywdnOIUbuYM9Z6wrKq9iDJAFgUFH7xn7qBReAQOm/2gx3fvzjXTqq6+BtaUcLRbIB1rmY5nToK1TK7SQFPdZeLibeAO3qJTD3asFFvGVe6huG2Yfhh2oPAXAOIm/3o5L3g19vi+JX8QLnc/iu/Yj7UTWOzV5/yNtyG4h7cJ3vz74LphAH4rgRlOfItpAHyBLTy75F8jS4E4gtUHq40k0BkSOA90pfOoA8qsxjiG7iizaScZQPdk1sHeRb8N37YPUiCgqhyByCREr9zXrn8g6y3nNOoUX3YtrYM6gAdN30V2KyFnMYgz8D4yD44VCwb0lAAAAAElFTkSuQmCC"
                    crossorigin="anonymous" class="sc-dmyDmy fxYwlQ">
                Affinidi Login
            </a>
        </div>
    </div>
</body>

</html>
```

4. Create dashboard `dashboard.blade.php` under `resources\views` for displaying the logged in user info
```
<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
</head>

<body>
    <h1>Welcome, {{ session("user")['email'] }} </h1>
    <a class="btn btn-outline-primary" href="/logout" style="width: 100%">
        Logout
    </a>
    <p>{{ dd(session("user")) }}</p>

</body>

</html>
```