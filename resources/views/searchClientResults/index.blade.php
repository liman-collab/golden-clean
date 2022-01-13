@extends('layouts.main')

@section('content')


@foreach($clients as $client)
    {{$client->last_name}}
@endforeach


@endsection
