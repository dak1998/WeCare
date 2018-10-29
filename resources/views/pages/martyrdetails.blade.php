@extends('layouts.app')

@section('mainContent')
    <div class="center-content-less-margin">
        <h1> Help {{ $martyrData->name }}'s Family</h1>
        <div class="col s12 m7">
            @if( $martyrData->total_donations>0 )
                <h3 class="header teal-text">{{$martyrData->total_donations}} already raised for {{$martyrData->name}}</h3>
            @else
                <h3 class="header teal-text">Be the first one to donate!</h3>
            @endif
            <div class="card horizontal">
                <div class="card-image">
                    <img class="detail-card" src="{{ asset($martyrData->photo_path  ) }}">

                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p class="para"><h5> From {{$martyrData->city}}<br><br>Served nation under {{$martyrData->force}}<br><br>
                            Has a family of {{$martyrData->family_mems}}<br><br>Martyred On {{$martyrData->martyr_date}} </h5></p>
                    </div>
                    <div class="card-action">
                        <a class="teal-text" href="/martyrs/{{$martyrData->id}}/edit">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection