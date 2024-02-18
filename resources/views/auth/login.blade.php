{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')"/>--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')"/>--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required--}}
{{--                          autofocus autocomplete="username"/>--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')"/>--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password"--}}
{{--                          required autocomplete="current-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox"--}}
{{--                       class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"--}}
{{--                       name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"--}}
{{--                   href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />

    <link href="auth/vendor/icons/icofont.min.css" rel="stylesheet" type="text/css">

    <link href="auth/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="auth/css/style.css" rel="stylesheet">

    <link href="auth/vendor/sidebar/demo.css" rel="stylesheet">
    <link href="auth/auth/css/style.css" rel="stylesheet">

</head>
<body>
<section class="osahan-main-body osahan-signin-main">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">
            <div class="landing-page shadow-sm bg-primary col-lg-6">
                <a class="position-absolute btn-sm btn btn-outline-light m-4 zindex" href="https://smirltech.com">Contact <i class="icofont-bubble-right"></i></a>
                <div class="osahan-slider m-0">
                    <div class="osahan-slider-item text-center">
                        <div class="d-flex align-items-center justify-content-center vh-100 flex-column">
                            <i class="icofont-sale-discount display-1 text-warning"></i>
                            <h4 class="my-4 text-white">{{  ucfirst(config('app.name')) }}</h4>
                            <p class="text-center text-white-50 mb-5 px-4">Cheaper prices than your local<br>supermarket, great cashback offers to top it off.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="osahan-signin shadow-sm bg-white p-4 rounded">
                    <div class="p-3">
                        <h2 class="my-0">Welcome Back</h2>
                        <p class="small mb-4">Sign in to Continue.</p>



                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="email" value="{{ old('email') }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input placeholder="Enter Password" type="password" class="form-control " id="password"
                                name="password" value="{{ old('password') }}"
                                >
                            </div>
                            <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                       class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                       name="remember">
                                <span class="ms-2 text-sm  text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-lg rounded btn-block">Sign in</button>
                        </form>
{{--                        <p class="text-center mt-3 mb-0">Don't have an account?<a href="{{ route('') }}" class="text-dark"> Sign up</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>



</html>



