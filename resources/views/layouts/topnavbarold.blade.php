<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">WeCare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/martyrs">Donate </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
        </ul>

    </div>
</nav>

IF (NEW.total_donations > 500000)
THEN
UPDATE martyrs
SET NEW.accepting_status = FALSE
WHERE OLD.id = NEW.id;
END IF

<div class="row">
    <div class="col m4 offset-m4 s12">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
                <div class="front">
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card black darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">Card Title</span>
                                    <p>I am a very simple.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="white-text">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div class="row">
                        <div class="col s12">
                            <div class="card white">
                                <div class="card-content black-text">
                                    <span class="card-title">Card Title</span>
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="black-text">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::open(['action' => 'MartyrsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-control">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
</div>
<div class="form-control">
    {{Form::label('city', 'Residence/Origin')}}
    {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Enter <city>,<state>'])}}
</div>
<div class="form-control">
    {{Form::label('force', 'Select Force')}}
    {{Form::select('force', ['INS','Air Force','BSF', 'MARCOS', 'BSF', 'CPRF'], null, ['class' => 'form-control', 'placeholder' => 'Select Force'])}}
</div>
<div class="form-control">
    {{Form::label('date', 'Select Date of Demise')}}
    {{Form::date('date', \Carbon\Carbon::now())}}
</div>
<div class="form-control">
    {{Form::label('family_mems', 'Select Number of People Dependent on Martyred')}}
    {{Form::selectRange('family_mems', 0, 11, ['class' => 'form-control'])}}
</div>

<div class="form-control">
    {{Form::label('bank_name', 'Bank Name')}}
    {{Form::text('bank_name', '', ['class' => 'form-control', 'placeholder' => 'Enter Bank Name'])}}
</div>
<div class="form-control">
    {{Form::label('account_no', 'Account Number')}}
    {{Form::text('account_no', '', ['class' => 'form-control', 'placeholder' => 'Enter Accouont Number'])}}
</div>
<div class="form-control">
    {{Form::label('ifsc_code', 'IFSC Code')}}
    {{Form::text('ifsc_code', '', ['class' => 'form-control', 'placeholder' => 'Enter IFSC Code'])}}
</div>
<div class="form-control">
    {{Form::file('profile_photo')}}

</div>
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

<!-- login  old -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>