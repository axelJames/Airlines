@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><big><b>Sign Up</b></big></div>
                <form method="post" action="/loyalty_profiles" class="form">
                    {{csrf_field()}}<div class="card-body card-bg" >
                        <div class="row">
                            
                                <div class="col-md-2">
                                    <select name="program" id="program" class="form-control form-control-lg" required>

                                    </select>
                                </div>


                                <div class="form-group col-md-2">
                                    <input type="date" name="dept_date" class="form-control"  required placeholder="DEPART">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary on-white disabled-btn">Confirm</button>
                                </div>
                            
                        </div>
                    </div>
                </form>
            </div>

            @if(isset($schedules))
            <div class="card">
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
                <tr class="clickable" data-href="">
                    <td class="user-name"><b>{{ $sch->tod }}</b></td>
                    <td class="user-name">{{ $sch->toa-$sch->tod }}</td>
                    <td class="user-name"><b>{{ $sch->toa }}</b></td>
<!--                     <td class="user-name">{{ $procedure->procedure_date }}</td>
                    <td class="user-name">
                        <a href="/procedures/{{ $procedure->id }}/edit"
                            class="btn btn-default success">Edit</button>
                    </td> -->
                </tr>
                @endforeach
            </table>
            </div>
            @endif

        </div>
    </div>
</div>

@endsection
