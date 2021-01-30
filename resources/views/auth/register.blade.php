@extends('layouts.app')

@section('content')

    <div>
        <div id="account">
            <div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <span>РЕГИСТРАЦИЯ</span>
                    @if($errors->any())
                        <span class="text-danger text-center">{{ $errors->first() }}</span>
                    @endif
                    <table>
                        <tbody><tr>
                            <td><label for="email">E-mail</label></td>
                            <td><input class="form-control @error('email') is-invalid @enderror" value="{{ old('email', '') }}" type="email" id="email" name="email" autocomplete="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="login">Имя</label></td>
                            <td><input class="form-control @error('name') is-invalid @enderror" value="{{ old('name', '') }}" type="text" id="login" name="name" required></td>
                        </tr>
                        <tr>
                            <td><label for="password">Пароль</label></td>
                            <td><input class="form-control @error('password') is-invalid @enderror" value="{{ old('password', '') }}" type="password" id="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td><label for="confirmpass">Подтвердите<br>пароль</label></td>
                            <td><input class="form-control" type="password" id="confirmpass"  value="{{ old('password', '') }}" name="password_confirmation" required autocomplete="new-password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="rememberme"><label for="rememberme"><input type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}> Запомнить меня на этом компьютере</label></td>
                        </tr>
                        </tbody></table>
                    <input style="" type="submit" value="Войти" class="submitbtn">
                </form>
            </div>
        </div>
    </div>

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
