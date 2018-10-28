@extends('layouts.app')

@section('mainContent')

    <div class="page-contatiner">
        <h1 class="center-content-less-margin">Donate</h1>
        @if( count($martyrData) > 0 )
            <div class="row">
            @foreach( $martyrData as $row )
                @if($row->accepting_status == true )
                    <div class="col l3 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator equal-size" src="{{ $row->photo_path }}">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">{{ $row->name }}<i class="material-icons right">more_vert</i></span>
                                <p><a class="white-text" href="/martyrs/{{$row->id}}">View Details and Donate</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">{{ $row->name }}<i class="material-icons right">close</i></span>
                                <h6><br>From {{$row->city}}<br><br>
                                    Has a family of {{$row->family_mems}}</h6>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            </div>

            <div class="pagination center-content-less-margin">
                {{ $martyrData->links() }}
            </div>

        @else
            <p>No data</p>
        @endif
    </div>


@endsection