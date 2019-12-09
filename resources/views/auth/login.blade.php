@extends('layouts.simple')

@section('content')
<div class="columns is-centered">
    <div class="column is-4">
        <div style="margin-top:50%;" class="card">
            <div class="card-header tbar">
                <div class="card-header-title has-text-white">
                <i class="fa fa-2x fa-lock"></i>&nbsp;
                {{ __('Login') }}
                </div>
            </div>
                <div class="card-content">
                    <div class="content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <label for="phone" class="label">{{ __('Mobile Phone Number') }}</label>

                            <div class="control">
                                <input id="phone" type="tel" class="input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="control">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-success is-medium">
                                    {{ __('Login') }}
                                </button>
                            </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer tbar">
                <div class="card-footer-item has-text-white" style="font-size:12px;text-align:left;">&copy; 2019 DCLM ICT TEAM</div>
                <div class="card-footer-item has-text-white" style="font-size:12px; text-align:right;">powered by:AHERTL&trade;</div>
            </div>
        </div>
    </div>
</div>
@endsection
