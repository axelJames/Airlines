@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form method="get" action="/loyalty_types">
                    <input type="hidden" name="type" value="completed">
              </form>
            

            @if(isset($loyalties))
            <!-- <div class="card"> -->
            <table class="table">
                <tr class="table-header">
                    <th></th>
                    <th>Name</th>
                    <th>Minimum Miles</th>
                    <th>Free Miles</th>
                    <th>Food Discount</th>
                    <th></th>
                </tr>
                @foreach ($loyalties as $index => $loyalty)
                <tr class="clickable" data-href="/procedures/ $procedure->id }}/edit">
                    <td class="user-name"><b>{{ $loyalty->program }}</b></td>
                    <td class="user-name">{{ $loyalty->minimum_miles }}</td>
                    <td class="user-name"><b>{{ $loyalty->free_miles }}</b></td>
                    <td class="user-name"><b>{{ $loyalty->food_discount }}</b></td>

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
