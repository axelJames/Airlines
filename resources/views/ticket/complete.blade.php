@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form method="get" action="/tickets">
                    <input type="hidden" name="type" value="active">
                    <ul class="nav nav-tabs">
                        <!-- <li><a class="btn btn-link" type="submit">Active tickets</a></li> -->
                        <li><a><button class="btn btn-link" type="submit">Active tickets</button></a></li>
                        <li class="active"><a href="#">Completed tickets</a></li>
                    </ul>
                </form>
            

            @if(isset($tickets))
            <!-- <div class="card"> -->
            <table class="table">
                <tr class="table-header">
                    <th></th>
                    <th>Name</th>
                    <th>Patient</th>
                    <th>Patient ID</th>
                    <th>Procedure Date</th>
                    <th></th>
                </tr>
                @foreach ($tickets as $index => $ticket)
                <tr class="clickable" data-href="/procedures/ $procedure->id }}/edit">
                    <td class="user-name"><b>{{ $ticket->latitude }}</b></td>
                    <td class="user-name">{{ $ticket->id }}</td>
                    <td class="user-name"><b>{{ $ticket->longitude }}</b></td>
<!--                     <td class="user-name"> $procedure->procedure_date }}</td>
                    <td class="user-name">
                        <a href="/procedures/ $procedure->id }}/edit"
                            class="btn btn-default success">Edit</button>
                    </td> -->
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
