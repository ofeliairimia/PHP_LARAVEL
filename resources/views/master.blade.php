<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<x-navbar></x-navbar>
<div id="app">
    @if(request()->is('/'))
        @if(!Auth::check())
            <div class="grid">
                <a href="{{ route('login-admin') }}" class="btn btn-primary">
                    <div>
                        <p>Login Admin</p>
                    </div>
                </a>
                <a href="{{ route('register-admin') }}" class="btn btn-success">
                    <div>
                        <p>Register Admin</p>
                    </div>
                </a>
                <a href="{{ route('login-user') }}" class="btn btn-info">
                    <div>
                        <p>Login User</p>
                    </div>
                </a>
                <a href="{{ route('register-user') }}" class="btn btn-warning">
                    <div>
                        <p>Register User</p>
                    </div>
                </a>
            </div>
        @endif
    @endif
    @yield('content')
</div>
</body>
</html>
