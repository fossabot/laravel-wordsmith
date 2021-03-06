@extends('site.layouts.main')

@section('title', __('auth.login-title'))

@section('content')
	<section class="s-content s-content--top-padding s-content--narrow">

		<div class="row narrow">
			<div class="col-full s-content__header">
				<h1 class="display-1 display-1--with-line-sep">{{ __('auth.login-title') }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-full s-content__main">
				@include('auth.includes.success')
				<form method="post" action="{{ route('login') }}">
					@csrf
					<fieldset>
						<div>
							<label for="sampleInput">{{ __('auth.e-mail-address') }}</label>
							<input name="email" id="cName" class="full-width {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('auth.enter-e-mail-address') }}" value="" type="email" required>
							@if ($errors->has('email'))
								<div class="alert-box alert-box--error hideit">
									<p>{{ $errors->first('email') }}</p>
									<i class="fa fa-times alert-box__close"></i>
								</div>
							@endif
						</div>

						<div>
							<label for="sampleInput">{{ __('auth.password') }}</label>
							<input id="password" type="password" class="full-width{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('auth.enter-password') }}" required>
							@if ($errors->has('password'))
								<div class="alert-box alert-box--error hideit">
									<p>{{ $errors->first('password') }}</p>
									<i class="fa fa-times alert-box__close"></i>
								</div>
							@endif
						</div>
						<button type="submit" class="submit btn btn--primary btn--large full-width">{{ __('auth.login') }}</button>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
@endsection