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
                <h5 class="m-0 font-weight-bold text-primary float-left">Prishjet</h5>
                <a href="{{route('damages.create')}}" class="btn btn-primary float-right">Create</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Kati</th>
                            <th>Pershkrimi i prishjes</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#Id</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Kati</th>
                            <th>Pershkrimi i prishjes</th>
                            <th>Manage</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($damages as $damage)
                            <tr class="{{$damage->fixed === 1 ? 'table-success' : 'table-danger'}} text-dark">
                                <td>{{$damage->id}}</td>
                                <td>{{$damage->building->name}}</td>
                                <td>{{$damage->gate->name}}</td>
                                <td>{{$damage->floor}}</td>
                                <td>{{$damage->damage}}</td>
                                <td><a href="{{route('damages.edit', $damage->id)}}" class="btn btn-success">Edit</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
