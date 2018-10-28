@extends('layouts.app')

@section('mainContent')

    <div class="page-contatiner">
        <div class="center-content-less-margin">
            <img src="{{$user->photo_url}}">
            <h1> Hello, {{$user->name}}</h1>
            <h3>Donated {{$user->total_donated }}</h3>
        </div>


        @if( $user->total_donated > 0 )

            <table class="striped centered responsive-table">
                <tr >
                    <th class="center-align"> Name </th>
                    <th class="center-align"> Force</th>
                    <th class="center-align"> Date</th>
                    <th class="center-align"> Amount</th>
                    <th class="center-align"> Status</th>
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
            <div class="center-content-less-margin">
                <input type="button" class="btn btn-dark" value="Donate" onclick="location.href='/martyrs'; ">
            </div>

        @endif

    </div>

@endSection