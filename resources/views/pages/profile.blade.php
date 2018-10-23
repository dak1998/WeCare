@extends('layouts.app')

@section('mainContent')
    <div class="page-contatiner">

    </div>
    <img src="{{$user->photo_url}}">
    <h1> Hello, {{$user->name}}</h1>
    <h3>Donated {{$user->total_donated }}</h3>

    @if( $user->total_donated > 0 )

        <table class="table table-striped table-dark">
            <tr>
                <th> Name </th>
                <th> Force</th>
                <th> Date</th>
                <th> Amount</th>
                <th> Status</th>
            </tr>

            @foreach($transactionForUser as $trans )
                <tr>
                    <td> {{ $trans->name }}</td>
                    <td> {{ $trans->force }}</td>
                    <td> {{ $trans->trans_date }}</td>
                    <td> {{ $trans->amount }}</td>
                    @if( $trans->status == 1 )
                        <td> Successful </td>
                    @else
                        <td> Pending </td>
                    @endif

                </tr>
            @endforeach
        </table>

    @else
        <input type="button" class="btn btn-dark" value="Donate" onclick="location.href='/martyrs'; ">
    @endif
@endSection