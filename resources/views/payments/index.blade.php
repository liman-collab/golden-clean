@extends('layouts.main')

@section('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="input-group m-3 justify-content-between">
    <div class="input-group-prepend">
{{--        <span class="input-group-text" id="basic-addon1">Kerko</span>--}}
        <input class="form-control" id="myInput" type="text" placeholder="Kerko">
    </div>
    @if(session()->has('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @endif


    <div class="input-group-prepend d-flex">
        <form method="POST" action="{{url('search')}}">
            @csrf
                <div class="row">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <div class="mx-1">
                                <input type="date" required class="form-control @error('fromDate') is-invalid @enderror" id="fromDate" name="fromDate">
                                @error('fromDate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <input type="date" required class="form-control @error('toDate') is-invalid @enderror" id="toDate" name="toDate">
                                @error('toDate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                            <button type="submit" class="btn" name="search" title="Search">
                                <img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
                            </button>

                        </div>
                        </div>
                    </div>
                </div>
{{--            </div>--}}
        </form>

            <a href="{{route('payments.index')}}" class="my-2">
                <img src="https://img.icons8.com/ios-glyphs/30/000000/refresh--v1.png"/>

            </a>


    </div>



</div>


<div class="card-body">
    <h5 class="text-primary font-weight-bold">Pagesat</h5>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>#Id</th>
                <th>Emri dhe Mbiemri</th>
{{--                <th>Mbiemri</th>--}}
                <th>Hyrja</th>
                <th>Banesa</th>
                <th>Muaji</th>
                <th>E paguar</th>
            </tr>
            </thead>

            <tbody  id="myTable">
            @if(!empty($invoices))
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{$invoice->id}}</td>
                    <td>{{$invoice->client->name}}</td>
{{--                    <td>{{$invoice->client->last_name}}</td>--}}
                    <td>{{$invoice->client->gate->name}}</td>
                    <td>{{$invoice->client->building->name}}</td>
                    @if($invoice->month_id == 0)
                        <td>Janar</td>
                    @elseif ($invoice->month_id == 1)
                        <td>Shkurt</td>
                    @elseif ($invoice->month_id == 2)
                        <td>Mars</td>
                    @elseif ($invoice->month_id == 3)
                        <td>Prill</td>
                    @elseif ($invoice->month_id == 4)
                        <td>Maj</td>
                    @elseif ($invoice->month_id == 5)
                        <td>Qershor</td>
                    @elseif ($invoice->month_id == 6)
                        <td>Korrik</td>

                    @elseif ($invoice->month_id == 7)
                        <td>Gusht</td>
                    @elseif ($invoice->month_id == 8)
                        <td>Shtator</td>
                    @elseif ($invoice->month_id == 9)
                        <td>Tetor</td>
                    @elseif ($invoice->month_id == 10)
                        <td>Nentor</td>

                    @else
                        <td>Dhjetor</td>

                    @endif

                    <td>{{$invoice->created_at}}</td>
                </tr>
            @endforeach
            @endif

            @if(!empty($reports))
            @foreach($reports as $report)

                <tr>
                    <td>{{$report->id}}</td>
                    <td>{{$report->client->name}}</td>
{{--                    <td>{{$report->client->last_name}}</td>--}}
                    <td>{{$report->client->gate->name}}</td>
                    <td>{{$report->client->building->name}}</td>
                    @if($report->month_id == 0)
                        <td>Janar</td>
                    @elseif ($report->month_id == 1)
                        <td>Shkurt</td>
                    @elseif ($report->month_id == 2)
                        <td>Mars</td>
                    @elseif ($report->month_id == 3)
                        <td>Prill</td>
                    @elseif ($report->month_id == 4)
                        <td>Maj</td>
                    @elseif ($report->month_id == 5)
                        <td>Qershor</td>
                    @elseif ($report->month_id == 6)
                        <td>Korrik</td>

                    @elseif ($report->month_id == 7)
                        <td>Gusht</td>
                    @elseif ($report->month_id == 8)
                        <td>Shtator</td>
                    @elseif ($report->month_id == 9)
                        <td>Tetor</td>
                    @elseif ($report->month_id == 10)
                        <td>Nentor</td>

                    @else
                        <td>Dhjetor</td>

                    @endif

                    <td>{{$report->created_at}}</td>
                </tr>
            @endforeach
            @endif

            </tbody>
        </table>
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
