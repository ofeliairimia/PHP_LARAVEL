@extends('master')

@section('content')
    <div class="formParent">
        <form method="POST" action="{{ route('register-user') }}" class="card">
            @csrf
            <h1>{{ __('Register') }} User</h1>
            <br>
            <div class="form">
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <br>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <br>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <br>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <br>
                <div class="form-buttons">
                    <button type="submit" class="largeButton">{{ __('Register') }}</button>
                </div>
            </div>
        </form>
        <br>
        <a href="{{ route('home') }}"><button class="largeButton">Back Home</button></a>
    </div>
@endsection
