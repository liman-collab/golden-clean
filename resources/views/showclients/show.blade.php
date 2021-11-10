@extends('layouts.main')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="input-group m-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Kerko</span>
    </div>
{{--    <div class="col-xs-4">--}}
        <input class="form-control col-sm-2" id="myInput" type="text">
{{--    </div>--}}

</div>

    <br>
    <br>
    <div class="container-fluid">

 <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <th >#Id</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Banesa</th>
                <th>Hyrja</th>
                <th>Pagesa</th>
                @foreach($months as $month)
                    <th>{{$month}}</th>
                @endforeach

                @foreach($clients as $client)
                    <tbody id="myTable">
                    <tr class="text-dark p-2">
                        <td>{{$client->id}}</td>
                        <td>{{$client->first_name}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>{{$client->building->name}}</td>
                        <td>{{$client->gate->name}}</td>
                        <td>{{$client->ashensor + $client->mbeturinat + $client->internet }} Euro</td>

                        @foreach($monthPositions as $monthPosition)
{{--                            @if (Auth::user()->hasRole('user')) custom-pe-none-confirm-td  @endif--}}


                        <td class="@foreach($invoices as $invoice)
                            @if($invoice->month_id == $monthPosition && $invoice->client_id == $client->id) bg-success custom-pe-none-confirm-td  @endif

                        @endforeach" >

                                       <div class="d-inline">
                                           <a target="_blank"  href="{{url('generate-invoice/'.$client->id.'/'.$monthPosition)}}">View</a>
                                       </div>
                                <div class="dropdown no-arrow d-inline">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                         aria-labelledby="dropdownMenuLink">

                                        <a class="dropdown-item" id="confirmInvoice" href="{{url('save-invoice/'.$client->id.'/'.$monthPosition)}}">Konfirmo Faturimin</a>
                                        <a class="dropdown-item" id="undoConfirm" href="#">Mos e konfirmo Faturimin</a>
                                    </div>
                                </div>
                            </td>

                        @endforeach

                    </tr>
                </tbody>
                @endforeach

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



