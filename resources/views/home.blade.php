@extends('layouts.app')
@section('mainContent')


        <div class="page-contatiner">


                        <div class="card">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                        <input type="button" class="btn btn-dark" onclick="location.href='/martyrs'" name="Donate" value="Doante">

        </div>


@endsection