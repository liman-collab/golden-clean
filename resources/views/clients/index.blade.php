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
                <h5 class="m-0 font-weight-bold text-primary float-left">Banoret</h5>
                <a href="{{route('clients.create')}}" class="btn btn-primary float-right">Create</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Emri</th>
                            <th>Mbiemri</th>
                            <th>Adresa</th>
                            <th>Telefoni</th>
                            <th>Qyteti</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Sherbimet</th>
                            <th>Fillimi i muajit</th>
                            <th>Fundi i muajit</th>
                            <th>Pagesat</th>
                            {{--                            <th>Total</th>--}}
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#Id</th>
                            <th>Emri</th>
                            <th>Mbiemri</th>
                            <th>Adresa</th>
                            <th>Telefoni</th>

                            <th>Qyteti</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Sherbimet</th>
                            <th>Fillimi i muajit</th>
                            <th>Fundi i muajit</th>
                            <th>Totali: {{$paymentTotal}} Euro</th>

                            <th>Manage</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($clients as $client)
                            <tr  class="{{$client->paid === 1 ? 'table-success' : 'table-danger'}} text-dark">
                                <td>{{$client->id}}</td>
                                <td>{{$client->first_name}}</td>
                                <td>{{$client->last_name}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->phone}}</td>

                                <td>{{$client->city_name}}</td>
                                <td>{{$client->building->name}}</td>
                                <td>{{$client->gate->name}}</td>
                                <td>{{$client->packages}}</td>
                                <td>{{$client->start_month}}</td>
                                <td>{{$client->end_month}}</td>
                                <td>{{$client->ashensor + $client->mbeturinat + $client->internet }} Euro</td>
                                {{--                                                    <td>{{$client->payment}} Euro</td>--}}
                                <td><a href="{{route('clients.edit', $client->id, $client->building_id)}}" class="btn btn-success">Edit</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    {{--                    <h1>{{$total}}</h1>--}}
                </div>
            </div>
        </div>

    </div>

@endsection
