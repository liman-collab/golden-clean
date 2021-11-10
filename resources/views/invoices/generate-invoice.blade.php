<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fature</title>
    <head>
{{--        <title>{{ $invoice->name }}</title>--}}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style type="text/css" media="screen">
            html {
                font-family: sans-serif;
                line-height: 0.2 !important;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                text-align: left;
                background-color: #fff;
                font-size: 10px;
                margin: 36pt;
            }

            h4 {
                margin-top: 0;
                margin-bottom: 0.5rem;
            }

            p {
                margin-top: 0;
                margin-bottom: 1rem;
            }

            strong {
                font-weight: bolder;
            }

            img {
                vertical-align: middle;
                border-style: none;
            }

            table {
                border-collapse: collapse;

            }

            th {
                text-align: inherit;
            }

            h4, .h4 {
                margin-bottom: 0.5rem;
                font-weight: 500;
                line-height: 1.2;
            }

            h4, .h4 {
                font-size: 1.5rem;
            }

            .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
            }

            .table th,
            .table td {
                padding: 0.75rem;
                vertical-align: top;
                /*border-top: 1px solid #dee2e6;*/
            }

            .table thead th {
                vertical-align: bottom;
                /*border-bottom: 2px solid #dee2e6;*/
            }

            .table tbody + tbody {
                /*border-top: 2px solid #dee2e6;*/
            }

            .mt-5 {
                margin-top: 3rem !important;
            }

            .pr-0,
            .px-0 {
                padding-right: 0 !important;
            }

            .pl-0,
            .px-0 {
                padding-left: 0 !important;
            }

            .text-right {
                text-align: right !important;
            }

            .text-center {
                text-align: center !important;
            }

            .text-uppercase {
                text-transform: uppercase !important;
            }

            * {
                font-family: "DejaVu Sans";
            }

            body, h1, h2, h3, h4, h5, h6, table, th, tr, td, p, div {
                line-height: 1.1;
            }
            .seller-name{
                line-height: 1.1;
            }

            .party-header {
                font-size: 1.5rem;
                font-weight: 400;
            }

            .total-amount {
                font-size: 12px;
                font-weight: 700;
            }

            .border-0 {
                border: none !important;
            }
        </style>
    </head>


</head>

<body class="p-0 m-0">
{{--<img style="max-width:8rem;" src="{{public_path('images/blue-logo.png')}}" />--}}
<table class="table m-0 p-0">
    <tbody>
    <tr>
        <td class="pl-0 m-0" width="70%">
            <div class="align-items-center">

                <h4 style="color: #4C72DE" class="text-uppercase">
                    <strong><span style="color: gold">Golden</span> Clean</strong>
                </h4>
            </div>

        </td>
        <td>
            <p>Serial Number: <strong>#{{$serialNumber}}</strong></p>
            <p>Data: <strong>{{$eachMonth}}</strong></p>
        </td>
    </tr>
    </tbody>
</table>
<hr>
{{-- Seller - Buyer --}}
<table class="table m-0" style="padding-top: 20px;">
    <thead>
    <tr>
        <th width="48.5%">
            <h4>Shitesi</h4>
        </th>
        <th class="border-0" width="3%"></th>
        <th class="border-0 pl-0">
            <h4>Bleresi</h4>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="px-0">
            <p class="seller-name">
                Emri Shitesit:  <strong>Skender Kastrati</strong>
            </p>

            <p class="seller-address">
                Adresa:   <strong>Xheladin Hana 105</strong>
            </p>

        </td>
        <td class="border-0"></td>
        <td class="px-0">
            <p class="buyer-name">
                Emri Bleresit:  <strong>{{$clientOrders->first_name}} {{$clientOrders->last_name}}</strong>
            </p>

            @if($clientOrders->address)
                <p class="buyer-address">
                    Adresa:   <strong>{{$clientOrders->address}}</strong>
                </p>
            @endif


            @if($clientOrders->phone)
                <p class="buyer-phone">
                    Telefoni:   <strong>{{$clientOrders->phone}}</strong>
                </p>
            @endif

            @if($clientOrders->phone)
                <p class="buyer-phone">
                    Hyrja:   <strong>{{$clientOrders->gate->name}}</strong>
                </p>
            @endif

            @if($clientOrders->phone)
                <p class="buyer-phone">
                    Banesa:   <strong>{{$clientOrders->building->name}}</strong>
                </p>
            @endif


        </td>
    </tr>
    </tbody>
</table>

<hr>
{{-- Table --}}
<table class="table m-0">
    <thead>
    <tr style="border: 1px solid #dee2e6 !important">
        <th  scope="col" class="border-0 pl-0">Sherbimet</th>

        <th scope="col" class="text-center border-0">Njesia</th>

        <th scope="col" class="text-right border-0">Cmimi</th>

    </tr>
    </thead>
    <tbody>
    @if($clientOrders->mbeturinat)
        <tr>

            <td class="pl-0">Mbeturinat</td>
            <td class="text-center">1</td>
            <td class="text-right">
                {{$clientOrders->mbeturinat}} Euro
            </td>

        </tr>
    @endif
    @if($clientOrders->ashensor)
        <tr>
            <td class="pl-0">Ashensori</td>
            <td class="text-center">1</td>
            <td class="text-right">
                {{$clientOrders->ashensor}} Euro
            </td>
        </tr>
    @endif
    @if($clientOrders->internet)
        <tr>
            <td class="pl-0">Interneti</td>
            <td class="text-center">1</td>
            <td class="text-right">
                {{$clientOrders->internet}} Euro
            </td>

        </tr>
    @endif
    <tr>
        <td class="pl-0"></td>
        <td class="text-center">Tax 15%</td>
        <td class="text-right">
            {{(($clientOrders->mbeturinat + $clientOrders->ashensor + $clientOrders->internet) * 15) / 100 }} Euro

        </td>
    </tr>
    <tr>
        <td class="pl-0"></td>
        <td class="text-center">Total</td>
        <td class="text-right">
            {{($clientOrders->mbeturinat + $clientOrders->ashensor + $clientOrders->internet)}} Euro
        </td>
    </tr>
    </tbody>
</table>

<table class="table m-0 p-0">
    <tbody>
    <tr>
        <td class="pl-0 m-0" width="70%">
            <div class="align-items-center">

                <h4 style="color: #4C72DE" class="text-uppercase">
                    <strong><span style="color: gold">Golden</span> Clean</strong>
                </h4>
            </div>

        </td>
        <td>
            <p>Serial Number: <strong>#{{$serialNumber}}</strong></p>
            <p>Data: <strong>{{$eachMonth}}</strong></p>
        </td>
    </tr>
    </tbody>
</table>
<hr>
{{-- Seller - Buyer --}}
<table class="table m-0" style="padding-top: 20px;">
    <thead>
    <tr>
        <th width="48.5%">
            <h4>Shitesi</h4>
        </th>
        <th class="border-0" width="3%"></th>
        <th class="border-0 pl-0">
            <h4>Bleresi</h4>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="px-0">
            <p class="seller-name">
                Emri Shitesit:  <strong>Skender Kastrati</strong>
            </p>

            <p class="seller-address">
                Adresa:   <strong>Xheladin Hana 105</strong>
            </p>

        </td>
        <td class="border-0"></td>
        <td class="px-0">
            <p class="buyer-name">
                Emri Bleresit:  <strong>{{$clientOrders->first_name}} {{$clientOrders->last_name}}</strong>
            </p>

            @if($clientOrders->address)
                <p class="buyer-address">
                    Adresa:   <strong>{{$clientOrders->address}}</strong>
                </p>
            @endif


            @if($clientOrders->phone)
                <p class="buyer-phone">
                    Telefoni:   <strong>{{$clientOrders->phone}}</strong>
                </p>
            @endif

            @if($clientOrders->phone)
                <p class="buyer-phone">
                    Hyrja:   <strong>{{$clientOrders->gate->name}}</strong>
                </p>
            @endif

            @if($clientOrders->phone)
                <p class="buyer-phone">
                    Banesa:   <strong>{{$clientOrders->building->name}}</strong>
                </p>
            @endif


        </td>
    </tr>
    </tbody>
</table>

<hr>
{{-- Table --}}
<table class="table m-0">
    <thead>
    <tr style="border: 1px solid #dee2e6 !important">
        <th  scope="col" class="border-0 pl-0">Sherbimet</th>

        <th scope="col" class="text-center border-0">Njesia</th>

        <th scope="col" class="text-right border-0">Cmimi</th>

    </tr>
    </thead>
    <tbody>
    @if($clientOrders->mbeturinat)
        <tr>

            <td class="pl-0">Mbeturinat</td>
            <td class="text-center">1</td>
            <td class="text-right">
                {{$clientOrders->mbeturinat}} Euro
            </td>

        </tr>
    @endif
    @if($clientOrders->ashensor)
        <tr>
            <td class="pl-0">Ashensori</td>
            <td class="text-center">1</td>
            <td class="text-right">
                {{$clientOrders->ashensor}} Euro
            </td>
        </tr>
    @endif
    @if($clientOrders->internet)
        <tr>
            <td class="pl-0">Interneti</td>
            <td class="text-center">1</td>
            <td class="text-right">
                {{$clientOrders->internet}} Euro
            </td>

        </tr>
    @endif
    <tr>
        <td class="pl-0"></td>
        <td class="text-center">Tax 15%</td>
        <td class="text-right">
            {{(($clientOrders->mbeturinat + $clientOrders->ashensor + $clientOrders->internet) * 15) / 100 }} Euro

        </td>
    </tr>
    <tr>
        <td class="pl-0"></td>
        <td class="text-center">Total</td>
        <td class="text-right">
            {{($clientOrders->mbeturinat + $clientOrders->ashensor + $clientOrders->internet)}} Euro
        </td>
    </tr>
    </tbody>
</table>

{{--<strong>--}}
{{--    Data Skadimit : {{$expireDateTime}}--}}
{{--</strong>--}}


</body>

</html>
