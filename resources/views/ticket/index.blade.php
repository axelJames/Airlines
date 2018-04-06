@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form method="get" action="/tickets">
                    <input type="hidden" name="type" value="completed">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Active tickets</a></li>                       
                    <li><a><button class="btn btn-link" type="submit">Completed tickets</button></a></li>
                    
                </ul>
              </form>
            

            @if(isset($tickets))
            <!-- <div class="card"> -->
            <table class="table">
                <tr class="table-header">
                    <th>Flight ID</th>
                    <th>Seat No</th>
                    <th>Date of Departure</th>
                    <th>Time of Departure</th>
                    <th>Date of Arrival</th>
                    <th>Time of Arrival</th>
                </tr>
                @foreach ($tickets as $index => $ticket)
                <tr class="clickable" data-href="/procedures/ $procedure->id }}/edit">
                    <td class="user-name">{{ $ticket->flight_id }}</td>
                    <td class="user-name">{{ $ticket->seat->seat_no }}</td>
                    <td class="user-name">{ $ticket->flight->dod }}</td>
                    <td class="user-name">{ $ticket->flight->tod }}</td>
                    <td class="user-name">{ $ticket->flight->doa }}</td>
                    <td class="user-name">{ $ticket->flight->toa }}</td>
                </tr>
                @endforeach
            </table>
            <!-- </div> -->
            @endif
            </div>
        </div>
    </div>
</div>

@endsection
