@extends('layouts.main')

@section('content')

    <div class="container-fluid">


        <!-- Content Row -->
        <div class="row">


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pagesat(Ditore)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    @if($currentTime) {{$paymentThroughInvoices}} Euro @endif
                                </div>
                            </div>

                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal of PaymentTotal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Banoret qe e kane perfunduar pagesen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Emri dhe Mbiemri</th>
{{--                                    <th scope="col">Mbiemri</th>--}}
                                    <th scope="col">Hyrja</th>
                                    <th scope="col">Banesa</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($paidTotalNameAndGates as $paidTotalNameAndGate)


                                    <tr>
                                        <th scope="row">{{$paidTotalNameAndGate->id}}</th>
                                        <td>  {{$paidTotalNameAndGate->name}}</td>
{{--                                        <td>   {{$paidTotalNameAndGate->last_name}}</td>--}}
                                        <td>   {{$paidTotalNameAndGate->gate->name}}</td>
                                        <td>  {{$paidTotalNameAndGate->building->name}}</td>
                                    </tr>


                                @endforeach


                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal of DebtTotal -->
            <div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Banoret qe nuk e kane perfunduar pagesen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Emri dhe Mbiemri</th>
{{--                                    <th scope="col">Mbiemri</th>--}}
                                    <th scope="col">Hyrja</th>
                                    <th scope="col">Banesa</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($debtTotalNameAndGates as $debtTotalNameAndGate)


                                    <tr>
                                        <th scope="row">{{$debtTotalNameAndGate->id}}</th>
                                        <td>  {{$debtTotalNameAndGate->name}}</td>
{{--                                        <td>   {{$debtTotalNameAndGate->last_name}}</td>--}}
                                        <td>   {{$debtTotalNameAndGate->gate->name}}</td>
                                        <td>  {{$debtTotalNameAndGate->building->name}}</td>
                                    </tr>


                                @endforeach


                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Banesat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$buildings->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-building fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Prishjet
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$fixedDamages->count()}}</div>
                                    </div>
{{--                                    <div class="col">--}}
{{--                                        <div class="progress progress-sm mr-2">--}}
{{--                                            <div class="progress-bar bg-info" role="progressbar"--}}
{{--                                                 style="width: 17%" aria-valuenow="17" aria-valuemax="100" aria-valuemin="0"--}}
{{--                                            ></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Banoret</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$clients->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Hyrjet</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$gates->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-building fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
{{--        <div class="card mx-auto">--}}
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
{{--        </div>--}}
        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Informacionet e Perditshme</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                 aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Mbaj informacionet:</div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Sheno</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body" style="overflow-y: scroll;">
                        <div class="chart-area" >
                                @foreach($notes as $note)
                                    - {{$note->description}} ({{$note->created_at->format('Y-m-d')}})

                                    <button class="bg-light border-0 text-primary p-0 btn-link" data-toggle="modal" data-target="#deleteModal" >Delete</button>
                                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deshironi vertet ta shlyeni kete shenim?</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form class="d-inline-block" method="POST" action="{{ route('notes.destroy', $note->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Po</button>
                                                </form>
                                                <button  class="btn btn-secondary" data-dismiss="modal">Jo</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                | <a href="{{route('notes.edit',$note->id)}}" data-toggle="modal" data-target="#exampleModal1"> Edit</a>  <br>
                                @endforeach
                        </div>
                    </div>

                </div>
            </div>




            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mbaj shenim</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="text-md-left"  method="POST" action="{{route('notes.store')}}">
                                @csrf
                            <div class="form-group">
                                <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('Shenim') }}</label>

                                <div class="col-md-12">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ndrysho shenimin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if(!empty(count($notes)))
                            <form class="text-md-left"  method="POST" action="{{route('notes.update', $note->id)}}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('Shenim') }}</label>

                                    <div class="col-md-12">
                                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description',$note->description) }}" required autocomplete="description" autofocus>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>


                    </div>
                </div>
            </div>




            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Klientet e Krijuar(Ditore)</h6>

                    </div>


                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie">
                            @foreach($todayClientCreated as $todaysClient)
                            {{$todaysClient->name}} <br>
                            @endforeach

                        </div>
                        <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                        </span>
                            <span class="mr-2">
                                        </span>
                            <span class="mr-2">
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

