@extends('layouts.main')

@section('title', 'Нагадати пароль')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Reset Password') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Нагадати пароль') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email"
                           class="col-md-4 col-form-label text-md-right">{{ __('Адреса електронної пошти') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm"
                           class="col-md-4 col-form-label text-md-right">{{ __('Підтвердити пароль') }}</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button class="btn btn-lg btn-primary btn-block"
                                type="submit">{{ __('Зареєструватися') }}</button>
                        <a class="btn btn-link" href="{{ route('site.index') }}">{{ __('← Назад до сайту') }}</a>
                        <a class="btn btn-link" href="{{ route('login') }}">{{ __('Увійти') }}</a>
                        <a class="btn btn-link" href="{{ route('register') }}">{{ __('Зареєструватися') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{ Widget::News() }}
@endsection
