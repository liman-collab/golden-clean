@extends('layouts.main')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


{{--    <script>--}}
{{--        function getddl() {--}}
{{--            var $test;--}}
{{--            $test = document.getElementById('yearNumber').innerHTML = (getYear.yearDate[getYear.yearDate.selectedIndex].text);--}}

{{--        }--}}
{{--    </script>--}}


<div class="input-group m-3 ">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Kerko</span>

    </div>

    <input class="form-control col-md-3" id="myInput" value="{{($name)}}" type="text">
{{--    <div>--}}
{{--        <form name="getYear">--}}
{{--            <select class="form-control" name="yearDate" id="yearDate" onchange="getddl()">--}}
{{--                <option value="{{$currentTime->format('Y')}}">{{$currentTime->format('Y')}}</option>--}}
{{--                <option value="{{$currentTime->format('Y')+1}}">{{$currentTime->format('Y')+1}}</option>--}}
{{--                <option value="{{$currentTime->format('Y')+2}}">{{$currentTime->format('Y')+2}}</option>--}}
{{--                <option value="{{$currentTime->format('Y')+3}}">{{$currentTime->format('Y')+3}}</option>--}}
{{--                <option value="{{$currentTime->format('Y')+4}}">{{$currentTime->format('Y')+4}}</option>--}}
{{--                <option value="{{$currentTime->format('Y')+5}}">{{$currentTime->format('Y')+5}}</option>--}}
{{--            </select>--}}
{{--        </form>--}}

{{--    </div>--}}
</div>


    <br>
    <br>
    <div class="container-fluid">

                 <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <th >#Id</th>
                <th>Emri dhe Mbiemri</th>
{{--                <th>Mbiemri</th>--}}
                <th>Banesa</th>
                <th>Hyrja</th>
                <th>Pagesa</th>
                @foreach($months as $month)
                    <th>{{$month}}</th>
                @endforeach
{{--                <th>Menagjo</th>--}}

{{--                 {!! "<label id='yearNumber'>{$currentTime->format('Y')}</label>" !!}--}}

                @foreach($clients as $client)
                    <tbody id="myTable">
                    <tr class="text-dark p-2">
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
{{--                        <td>{{$client->last_name}}</td>--}}
                        <td>{{$client->building->name}}</td>
                        <td>{{$client->gate->name}}</td>
                        <td>{{$client->mirembajtje13 + $client->mirembajtje14
                         + $client->mirembajtje15+$client->mirembajtje10 + $client->internet
                         + $client->tv+$client->parking }}  Euro
                        </td>

                        @foreach($monthPositions as $monthPosition)

                        <td class="@foreach($invoices as $invoice)
                        @if($currentTime->format('Y-m-d') == $invoice->created_at->format('Y-m-d'))
                        @if($invoice->month_id == $monthPosition && $invoice->client_id == $client->id)
                            bg-success custom-pe-none-confirm-td
                        @endif
                        @endif
                        @endforeach">
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
                                    </div>
                                </div>
                            </td>

                        @endforeach
{{--                    <td>--}}
{{--                        <form method="POST" action="{{ route('showclients.destroy', $client->id) }}">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button class="btn btn-danger">Delete</button>--}}
{{--                        </form>--}}
{{--                        </td>--}}
                    </tr>
                </tbody>

                @endforeach

            </table>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#myInput").on("click",function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $("#myInput").on("keyup",function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


@endsection



