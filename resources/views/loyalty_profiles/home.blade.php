@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><big><b>Loyalty Program</b></big></div>
                <form method="get" action="/loyalty_profiles" class="form">
                    <div class="card-body card-bg" >
                        <div class="row">
                            @foreach ($profile as $index => $profil)
                                <label>Program<label>
                                <big>{{$profil->program}}<big>
                                <label>Free Miles<label>
                                <big>{{$profil->free_miles}}<big>
                            @endforeach

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
