<x-auth-layout>
  <x-slot name="title">
    {{ __('Administrator Login') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h2">{{ __('Welcome back, Charles') }}</h1>
	<p class="lead">{{ __('Sign in to your account to continue') }}</p>
  </x-slot>

  <form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">{{ __('Email') }}</label>
      <div class="input-group">
        <input class="form-control form-control-lg" type="email" name="email" :value="old('email')" placeholder="{{ __('Enter your email') }}" />
      </div>
    </div>
    <div class="mb-3">
      <label class="form-label">{{ __('Password') }}</label>
      <div class="input-group">
        <input class="form-control form-control-lg" type="password" name="password" placeholder="{{ __('Enter your password') }}" />
      </div>
      <small>
        <a href="javascrip:void(0)">{{ __('Forgot password?') }}</a>
      </small>
    </div>
    <div>
      <label class="form-check">
        <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked />
        <span class="form-check-label">{{ ('Remember me next time') }}</span>
      </label>
    </div>
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-lg btn-primary">{{ ('Sign in') }}</button>
    </div>
  </form>
</x-auth-layout>
