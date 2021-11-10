@extends('layouts.main')

@section('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


{{--    <div class="card rounded-0 p-2">--}}
{{--        @foreach($invoices as $invoice)--}}
{{--            <a class="py-3 d-inline" href="#">{{$invoice->client->first_name}}</a>--}}
{{--            <a class="py-3 d-inline" href="#">{{$invoice->month_id}}</a>--}}
{{--        @endforeach--}}
{{--    </div>--}}
<div class="input-group m-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Kerko</span>
    </div>
    {{--    <div class="col-xs-4">--}}
    <input class="form-control col-sm-2" id="myInput" type="text">
    {{--    </div>--}}

</div>

<div class="card-body">
    <h5 class="text-primary font-weight-bold">Pagesat</h5>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>#Id</th>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Hyrja</th>
                <th>Banesa</th>
                <th>Muaji</th>
                <th>E paguar</th>
            </tr>
            </thead>

            <tbody  id="myTable">
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{$invoice->id}}</td>
                    <td>{{$invoice->client->first_name}}</td>
                    <td>{{$invoice->client->last_name}}</td>
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
