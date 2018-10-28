@extends('layouts.app')

@section('mainContent')
    <div class="page-contatiner">
        <div class="center-content">
            <div class="card-form">
                <div class="card-title-form">{{ __('Login') }}</div>
                <div class="card-content-form">
                    <form class="col s12 form-margin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12 ">
                                <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                                <label for="email">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="password">{{ __('Password') }}</label>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn" value="{{ __('Login') }}">

                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <a class="waves-effect waves-light btn black-text" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            </div>
                        </div>
                        <hr width="80%">
                        <div class="row">
                            <div class="input-field col s12">

                                <a class="waves-effect waves-light btn black-text" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
