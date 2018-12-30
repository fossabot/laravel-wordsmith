@extends('auth.layouts.auth')

@section('title', __('auth.reset-password-title'))

@section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">{{ __('auth.reset-password-title') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-full s-content__main">
                @include('auth.includes.success')
                <form method="post" action="{{ route('password.request') }}">
                    @csrf
                    @if (session('status'))
                        <div class="alert-box alert-box--success hideit">
                            <p>{{ session('status') }}</p>
                            <i class="fa fa-times alert-box__close"></i>
                        </div>
                    @endif
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div>
                        <label for="sampleInput">{{ __('auth.e-mail-address') }}</label>
                        <input type="email" id="email"
                               class="full-width{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="{{ __('auth.enter-e-mail-address') }}" required
                               autofocus>
                        @if ($errors->has('email'))
                            <div class="alert-box alert-box--error hideit">
                                <p>{{ $errors->first('email') }}</p>
                                <i class="fa fa-times alert-box__close"></i>
                            </div>
                        @endif
                    </div>

                    <div>
                        <label for="sampleInput">{{ __('auth.password') }}</label>
                        <input type="password" id="password"
                               class="full-width{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               value="{{ old('password') }}" placeholder="{{ __('auth.enter-password') }}" required
                               autofocus>
                        @if ($errors->has('password'))
                            <div class="alert-box alert-box--error hideit">
                                <p>{{ $errors->first('password') }}</p>
                                <i class="fa fa-times alert-box__close"></i>
                            </div>
                        @endif
                    </div>

                    <div>
                        <label for="sampleInput">{{ __('auth.confirm-password') }}</label>
                        <input type="password" id="password-confirm" class="full-width" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="{{ __('auth.enter-confirm-password') }}" required autofocus>
                    </div>
                    <div class="text-center">
                        <button class="submit btn btn--primary btn--large full-width" type="submit">{{ __('auth.reset-password') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
