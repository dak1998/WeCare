@extends('layouts.app')

@section('mainContent')
    <h1> Hello, {{$user->name}}</h1>
    <h3>Donated {{$user->total_donated }}</h3>
    @if( $user->total_donated > 0 )
        <table class="table table-striped">
            <tr>
                <th> Name </th>
                <th> Force</th>
                <th> Date</th>
                <th> Amount</th>
                <th> Status</th>
            </tr>
            @foreach($transactionForUser as $trans)
                <tr>
                    <td> $martyr</td>
                </tr>
            @endforeach
        </table>

    @else
        <input type="button" class="btn btn-dark" value="Donate" onclick="location.href='/martyrs'; ">
    @endif
@endSection