@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><big><b>Search Planes</b></big></div>
                <form method="post" action="/procedures" class="form">
                    {{ csrf_field() }}
                    <div class="card-body card-bg" >
                        <div class="row">
                            
                                <div class="col-md-4">
                                    <select id="source" class="form-control form-control-lg">
                                        @foreach ($airports as $index => $airport)
                                        <option>{{$airport->name.','.$airport->city.','.$airport->country}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select id="dest" class="form-control form-control-lg">
                                        @foreach ($airports as $index => $airport)
                                        <option>{{$airport->name.','.$airport->city.','.$airport->country}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="date" name="dept_date" class="form-control"  required placeholder="DEPART">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary on-white disabled-btn"> Search</button>
                                </div>
                            
                        </div>
                    </div>
                </form>
            </div>

            @if(isset($schedules))
            <table class="table">
                <!-- <tr class="table-header">
                    <th></th>
                    <th>Name</th>
                    <th>Patient</th>
                    <th>Patient ID</th>
                    <th>Procedure Date</th>
                    <th></th>
                </tr> -->
                @foreach ($schedules as $index => $sch)
                <tr class="clickable" data-href="/procedures/{{ $procedure->id }}/edit">
                    <td class="user-name">{{ $sch->id }}</td>
                    <td class="user-name">{{ $sch->procedure_name }}</td>
                    <td class="user-name">{{ $sch->patient->patient->name }}</td>
                    <td class="user-name">{{ $sch->patient_id }}</td>
<!--                     <td class="user-name">{{ $procedure->procedure_date }}</td>
                    <td class="user-name">
                        <a href="/procedures/{{ $procedure->id }}/edit"
                            class="btn btn-default success">Edit</button>
                    </td> -->
                </tr>
                @endforeach
            </table>
            @endif

        </div>
    </div>
</div>

@endsection
