@extends('layouts.app')

@section('mainContent')
    <h1> Add Martyr </h1>
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
@endsection