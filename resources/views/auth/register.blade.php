@extends('layouts.simple')

@section('content')
<div class="columns is-centered">
    <div class="column is-6">
        <div style="margin-top:15%;" class="card">
            <div class="card-header tbar">
                <div class="card-header-title has-text-white">{{ __('Register') }}</div>
            </div>
            <div class="card-content">
                <div class="content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field">
                            <label for="user_name" class="label">{{ __('User Name') }}</label>

                            <div class="control">
                                <input id="user_name" type="text" class="input @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="notification is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="notification is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="field">
                            <label for="phone" class="label">{{ __('Mobile Phone Number') }}</label>

                            <div class="control">
                                <input id="phone" type="tel" class="input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="notification is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="control">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="notification is-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="control">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <input type="hidden" id="role" name="role" value="staff member">
                        <div class="field ">
                            <div class="control">
                                <button type="submit" class="button is-primary is-medium">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="card-footer tbar">
                    <a href="/" class="card-footer-item has-text-white">
                    &copy; 2019 DEEPER CHRISTIAN LIFE MINISTRY ICT
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
