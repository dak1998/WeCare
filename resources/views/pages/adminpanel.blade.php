@extends('layouts.app')

@section('mainContent')
    <div class="center-content-less-margin">
        <h1>Welcome Admin</h1> <br><br><br>
        <div class="row">
            <div class="col l6">
                <a href="/martyrs/create"> <img src="assets/add.svg" width="300px" height="300px"> </a>
                <h5>Add a martyr</h5>
            </div>
            <div class="col l6">
                <a href="/admin/track"><img src="assets/logo_track.png" width="300px" height="300px"></a>
                <h5>Track Transactions</h5>
            </div>
        </div>
    </div>
@endsection