@extends('layouts.app')

@section('mainContent')

    <div class="page-contatiner">
        <div class="center-content-less-margin">
            @if( count($transactionsData)>0)
                <h1>All Transactions Till Date</h1> <br><br><br>
                <table class="striped centered responsive-table">
                    <tr>
                        <th>Transaction Id</th>
                        <th>Transaction Date</th>
                        <th>Amount Donated</th>
                        <th>Status</th>
                    </tr>
                    @foreach($transactionsData as $row)
                        <tr>
                            <td>{{$row->trans_id}}</td>
                            <td>{{$row->trans_date}}</td>
                            <td>{{$row->amount}}</td>
                            @if($row->status == 1)
                                <td>Successful</td>
                            @else
                                <td> Failed </td>
                            @endif
                        </tr>
                    @endforeach
                </table>

                <div class="pagination center-content-less-margin">
                    {{ $transactionsData->links() }}
                </div>
            @else
                <h1> No transactions Yet</h1>
            @endif

        </div>
    </div>


@endsection