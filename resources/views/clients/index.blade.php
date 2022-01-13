@extends('layouts.main')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container-fluid">
        <div class="input-group m-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kerko</span>
            </div>
            {{--    <div class="col-xs-4">--}}
            <input class="form-control col-sm-2" id="myInput" type="text">
            {{--    </div>--}}

        </div>

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
                            <th>Emri dhe Mbiemri</th>
{{--                            <th>Mbiemri</th>--}}
                            <th>Adresa</th>
                            <th>Telefoni</th>
                            <th>Qyteti</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Sherbimet</th>
                            <th>Fillimi i muajit</th>
                            <th>Fundi i muajit</th>
                            <th>Pagesat</th>

                            @if(Auth::user()->hasRole('admin'))     <th>Manage</th>@endif
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#Id</th>
                            <th>Emri dhe Mbiemri</th>
{{--                            <th>Mbiemri</th>--}}
                            <th>Adresa</th>
                            <th>Telefoni</th>

                            <th>Qyteti</th>
                            <th>Banesa</th>
                            <th>Hyrja</th>
                            <th>Sherbimet</th>
                            <th>Fillimi i muajit</th>
                            <th>Fundi i muajit</th>
                            <th>Pagesat</th>

                            @if(Auth::user()->hasRole('admin'))  <th>Manage</th> @endif
                        </tr>
                        </tfoot>
                        <tbody  id="myTable">
                        @foreach($clients as $client)
                            <tr class="text-dark" >
                                <td>{{$client->id}}</td>
                                <td>{{$client->name}}</td>
{{--                                <td>{{$client->last_name}}</td>--}}
                                <td>{{$client->address}}</td>
                                <td>{{$client->phone}}</td>

                                <td>{{$client->city_name}}</td>
                                <td>{{$client->building->name}}</td>
                                <td>{{$client->gate->name}}</td>
                                <td>{{$client->packages}}</td>
                                <td>{{$client->start_month}}</td>
                                <td>{{$client->end_month}}</td>
                                <td>{{$client->mirembajtje13 + $client->mirembajtje14
 + $client->mirembajtje15+$client->mirembajtje10 + $client->internet
 + $client->tv+$client->parking }} Euro</td>

                                @if(Auth::user()->hasRole('admin'))
                                    <td><a href="{{route('clients.edit', $client->id, $client->building_id)}}" class="btn btn-success">Edit</a></td> @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

@endsection
