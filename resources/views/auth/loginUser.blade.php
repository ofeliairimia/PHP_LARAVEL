@extends('master')

@section('content')
    <div class="formParent">
        <form method="POST" action="{{ route('login-user') }}" class="card">
            @csrf
            <h1>{{ __('Login') }} User</h1>
            <br>
            <div class="form">
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <br>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-buttons">
                    <button type="submit" class="largeButton">{{ __('Login') }}</button>
                </div>
            </div>
        </form>
        <a href="{{ route('home') }}"><button class="largeButton">Back Home</button></a>
    </div>
@endsection
