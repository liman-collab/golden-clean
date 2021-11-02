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
                <h5 class="m-0 font-weight-bold text-primary float-left">Hyrjet</h5>
                <a href="{{route('gates.create')}}" class="btn btn-primary float-right">Create</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#Id</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Manage</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($gates as $gate)
                            <tr>
                                <td>{{$gate->id}}</td>
                                <td>{{$gate->building->name}}</td>
                                <td>{{$gate->name}}</td>
                                <td><a href="{{route('gates.edit', $gate->id)}}" class="btn btn-success">Edit</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
