@extends('layouts.main')

@section('content')


    <div class="container-fluid">
        <div class="form-row align-items-center">
            <div class="col">
                <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
        </div>
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
                    <tr class="text-dark p-2">
                        <td>{{$client->id}}</td>
                        <td>{{$client->first_name}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>{{$client->building->name}}</td>
                        <td>{{$client->gate->name}}</td>
                        <td>{{$client->ashensor + $client->mbeturinat + $client->internet }} Euro</td>

                        @foreach($monthPositions as $monthPosition)


                        <td class="@foreach($invoices as $invoice)
                            @if($invoice->month_id == $monthPosition && $invoice->client_id == $client->id) bg-success  @endif
                        @endforeach">

                                       <div class="d-inline">
                                           <a  href="{{url('generate-invoice/'.$client->id.'/'.$monthPosition)}}">View</a>
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
                @endforeach

            </table>
        </div>
    </div>




@endsection
