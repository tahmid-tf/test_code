{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


<style>
    /* config.css */

    :root {
        --baseColor: #606468;
    }

    /* helpers/align.css */

    .align {
        display: grid;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        justify-items: center;
        place-items: center;
    }

    .grid {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        max-width: 20rem;
    }

    /* helpers/hidden.css */

    .hidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    /* helpers/icon.css */

    :root {
        --iconFill: var(--baseColor);
    }

    .icons {
        display: none;
    }

    .icon {
        height: 1em;
        display: inline-block;
        fill: #606468;
        width: 1em;
        vertical-align: middle;
    }

    /* layout/base.css */

    :root {
        --htmlFontSize: 100%;

        --bodyBackgroundColor: #2c3338;
        --bodyColor: var(--baseColor);
        --bodyFontFamily: "Open Sans";
        --bodyFontFamilyFallback: sans-serif;
        --bodyFontSize: 0.875rem;
        --bodyFontWeight: 400;
        --bodyLineHeight: 1.5;
    }

    * {
        -webkit-box-sizing: inherit;
        box-sizing: inherit;
    }

    html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 100%;
    }

    body {
        background-color: #2c3338;
        color: #606468;
        font-family: "Open Sans", sans-serif;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        min-height: 100vh;
    }

    /* modules/anchor.css */

    :root {
        --anchorColor: #eee;
    }

    a {
        color: #eee;
        outline: 0;
        text-decoration: none;
    }

    a:focus,
    a:hover {
        text-decoration: underline;
    }

    /* modules/form.css */

    :root {
        --formGap: 0.875rem;
    }

    input {
        background-image: none;
        border: 0;
        color: inherit;
        font: inherit;
        margin: 0;
        outline: 0;
        padding: 0;
        -webkit-transition: background-color 0.3s;
        -o-transition: background-color 0.3s;
        transition: background-color 0.3s;
    }

    input[type="submit"] {
        cursor: pointer;
    }

    .form {
        display: grid;
        grid-gap: 0.875rem;
        gap: 0.875rem;

    }

    .form input[type="password"],
    .form input[type="text"],
    .form input[type="submit"] {
        width: 100%;
    }

    .form__field {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .form__input {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    /* modules/login.css */

    :root {
        --loginBorderRadus: 0.25rem;
        --loginColor: #eee;

        --loginInputBackgroundColor: #3b4148;
        --loginInputHoverBackgroundColor: #434a52;

        --loginLabelBackgroundColor: #363b41;

        --loginSubmitBackgroundColor: #ea4c88;
        --loginSubmitColor: #eee;
        --loginSubmitHoverBackgroundColor: #d44179;
    }

    .login {
        color: #eee;
    }

    .login label,
    .login input[type="text"],
    .login input[type="email"],
    .login input[type="password"],
    .login input[type="submit"] {
        border-radius: 0.25rem;
        padding: 1rem;
    }

    .login label {
        background-color: #363b41;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
    }

    .login input[type="password"],
    .login input[type="text"] {
        background-color: #3b4148;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
    }

    .login input[type="password"]:focus,
    .login input[type="password"]:hover,
    .login input[type="text"]:focus,
    .login input[type="text"]:hover {
        background-color: #434a52;
    }

    .login input[type="submit"] {
        background-color: #ea4c88;
        color: #eee;
        font-weight: 700;
        text-transform: uppercase;
    }

    .login input[type="submit"]:focus,
    .login input[type="submit"]:hover {
        background-color: #d44179;
    }

    /* modules/text.css */

    p {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .text--center {
        text-align: center;
    }

</style>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="align">

<div class="grid">

    <form action="{{ route('login') }}" method="POST" class="form login">

        @csrf

        <div class="form__field">
            <label for="login__username">
                <svg class="icon">
                    <use xlink:href="#icon-user"></use>
                </svg>
                <span class="hidden">Email</span></label>
            <input autocomplete="email" id="login__username" type="text" name="email" class="form__input"
                   placeholder="email" required>
        </div>

        <div class="form__field">
            <label for="login__password">
                <svg class="icon">
                    <use xlink:href="#icon-lock"></use>
                </svg>
                <span class="hidden">Password</span></label>
            <input id="login__password" type="password" name="password"
                   class="form__input @error('password') is-invalid @enderror" placeholder="Password"
                   required>
        </div>

        <div class="form__field">
            <input type="submit" value="Sign In">
        </div>


    </form>

{{--    <p class="text--center">Not a member? <a href="#">Sign up now</a>--}}
{{--        <svg class="icon">--}}
{{--            <use xlink:href="#icon-arrow-right"></use>--}}
{{--        </svg>--}}
{{--    </p>--}}

</div>

<svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
        <path
            d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/>
    </symbol>
    <symbol id="icon-lock" viewBox="0 0 1792 1792">
        <path
            d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/>
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1792 1792">
        <path
            d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/>
    </symbol>
</svg>

</body>
</html>
