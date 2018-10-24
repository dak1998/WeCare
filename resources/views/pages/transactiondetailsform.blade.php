@extends('layouts.app')

@section('mainContent')
    <style>
        body {
            background-color: #f2fffd;
        }
    </style>

    <div class="center-content-less-margin">
        <h1> Enter Transaction Details </h1>
        <div class="para-content">
            <div class="row">
                <form class="col s12" action="{{ action('TransactionsController@store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="amount" name="amount" type="number" class="validate">
                            <label for="amount">Ammount To Donate</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="message" name="message" type="text" class="validate">
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <input type='hidden' name='to_uid' value={{$id}}>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
