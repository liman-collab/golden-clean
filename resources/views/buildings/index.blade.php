@extends('layouts.main')

@section('content')

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div>
                <div class="card mx-auto">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary float-left">Banesat</h5>
                <a href="{{route('buildings.create')}}" class="btn btn-primary float-right">Create</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Emri</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#Id</th>
                            <th>Emri</th>
                            <th>Manage</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($buildings as $building)
                            <tr>
                                <td>{{$building->id}}</td>
                                <td>{{$building->name}}</td>
                                <td><a href="{{route('buildings.edit', $building->id)}}" class="btn btn-success">Edit</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card rounded-0 p-2">
            @foreach($buildings as $building)
                <a class="py-3 d-inline" href="{{route('buildings.show', $building->id)}}">{{$building->name}}</a>
            @endforeach
        </div>

    </div>

@endsection
