@extends('layouts.mainframe')

@section('mainContent')
    <h1> Donate </h1>
    @if( count($martyrData) > 0 )
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                @foreach( $martyrData as $row )
                    <li class="list-group-item"><a href="/martyrs/{{$row->id}}"> {{$row->name}} <br> <small> from {{$row->city}}</small> </a>  </li>
                @endforeach
            </ul>
        </div>
        {{$martyrData->links()}}
    @else
        <p>No data</p>
    @endif
@endsection