@extends('layouts.main')

@section('content')


    <div class="container-fluid">
       <h2>{{$building->name}}</h2>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <th class="p-2">Id</th>
                <th class="p-2">Hyrjet e Banesave</th>
                <th class="p-2">Actions</th>
                @foreach($gates as $gate)

                    <tr>
                        <td class="p-2">{{$gate->id}}</td>
                        <td class="p-2">{{$gate->name}}</td>
                        <td><a href="{{route('showclients.show', $gate->id)}}"  class="text-primary">View</a></td>
                    </tr>

                @endforeach
            </table>
        </div>
    </div>




@endsection
