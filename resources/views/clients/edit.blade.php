@extends('layouts.main')

@section('content')

    <div class="container-fluid" xmlns:livewire="http://www.w3.org/1999/html">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-10">

            <div class="card-header d-flex justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary float-left">Update Banorin</h5>


                {{--                <td><a href="{{route('clients.edit', $client->id, $client->building_id)}}" class="btn btn-success">Edit</a></td>--}}

                <a href="{{url('generate-invoice/'.$client->id)}}" target="_blank" type="button" class="{{empty($client->paid)  ? 'd-none' : 'd-sm-inline-block btn btn-sm btn-primary shadow-sm'}}"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>


            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('clients.update', $client->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col">


                            <div class="form-group">
                                <label for="id" class="col-md-4 col-form-label text-md-left">{{ __('Id') }}</label>

                                <div class="col-md-12">
                                    <input disabled id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id', $client->id) }}" required autocomplete="id" autofocus>

                                    @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="first_name" class="col-md-4 col-form-label text-md-left">{{ __('Emri') }}</label>

                                <div class="col-md-12">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name', $client->first_name) }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="first_name" class="col-md-4 col-form-label text-md-left">{{ __('Mbiemri') }}</label>

                                <div class="col-md-12">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', $client->last_name) }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-4 col-form-label text-md-left">{{ __('Adresa') }}</label>

                                <div class="col-md-12">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $client->address) }}" required autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="city_name" class="col-md-4 col-form-label text-md-left">{{ __('Qyteti') }}</label>

                                <div class="col-md-12">
                                    <input id="city_name" type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name" value="{{ old('city_name', $client->city_name) }}" required autocomplete="city_name" autofocus>

                                    @error('city_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="phone" class="col-md-4 col-form-label text-md-left">{{ __('Telefoni') }}</label>

                                <div class="col-md-12">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $client->phone) }}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="start_month" class="col-md-12 col-form-label text-md-left">{{ __('Fillimi i muajit') }}</label>

                                <div class="col-md-12">
                                    <input id="start_month" type="text" class="form-control datepicker @error('start_month') is-invalid @enderror" name="start_month" value="{{ old('start_month', $client->start_month) }}" autocomplete="start_month">

                                    @error('start_month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="end_month" class="col-md-12 col-form-label text-md-left">{{ __('Fundi i muajit') }}</label>

                                <div class="col-md-12">
                                    <input id="end_month" type="text" class="form-control datepicker @error('end_month') is-invalid @enderror" name="end_month" value="{{ old('end_month',$client->end_month) }}"  autocomplete="end_month">

                                    @error('end_month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="col">


                            <livewire:update-client-gate selectedId={{$selectedId}}>



                                <script type="text/javascript">

                                    $(function() {
                                        var $packages = $("#ashensor");
                                        var $ashensor = $("input[name='ashensor']");

                                        $packages.on('change', function() {
                                            $ashensor.val(this.checked ? '8' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#mbeturinat");
                                        var $mbeturinat = $("input[name='mbeturinat']");

                                        $packages.on('change', function() {
                                            $mbeturinat.val(this.checked ? '9' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#internet");
                                        var $internet = $("input[name='internet']");

                                        $packages.on('change', function() {
                                            $internet.val(this.checked ? '10' : null);
                                        });
                                    });

                                    $('form').bind('submit', function () {
                                        $(this).find(':input').prop('disabled', false);
                                    });
                                </script>

                                <div class="form-group">
                                    <label for="date_registered" class="col-md-12 col-form-label text-md-left">{{ __('Sherbimet') }}</label>

                                    {{--                                <div class="col-md-12">--}}
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ashensor"
                                               {{!empty($client->ashensor)  ? 'checked' : ''}} id="ashensor" name="packages[]">
                                        <input type="hidden" name="ashensor" value="{{$client->ashensor}}">
                                        <label class="form-check-label" for="ashensor">
                                            Ashensori
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mbeturinat" id="mbeturinat"
                                               {{!empty($client->mbeturinat)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="mbeturinat" value="{{$client->mbeturinat}}">
                                        <label class="form-check-label" for="mbeturinat">
                                            Mbeturinat
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="internet" id="internet"
                                               {{!empty($client->internet)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="internet" value="{{$client->internet}}">
                                        <label class="form-check-label" for="internet">
                                            Interneti
                                        </label>
                                    </div>

                                    {{--                                </div>--}}
                                    <hr>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1"
                                               {{!empty($client->paid)  ? 'checked' : ''}} id="paid" name="paid">
                                        <label class="form-check-label" for="paid">
                                            E Paguar
                                        </label>
                                    </div>
                                </div>

                        </div>


                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" wire>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <div class="m-2 p-2">
            <form method="POST" action="{{ route('clients.destroy', $client->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete {{ $client->first_name }}</button>
            </form>
        </div>



    </div>

@endsection

