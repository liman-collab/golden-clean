@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-sm-10">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-primary float-left">Krijo Klientin</h5>
            </div>
            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('clients.store')}}">
                    @csrf
                    <div class="row">

                        <div class="col">

                            <div class="form-group">
                                <label for="first_name" class="col-md-4 col-form-label text-md-left">{{ __('Emri') }}</label>

                                <div class="col-md-12">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="last_name" class="col-md-12 col-form-label text-md-left">{{ __('Mbiemri') }}</label>

                                <div class="col-md-12">
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-md-12 col-form-label text-md-left">{{ __('Adresa') }}</label>

                                <div class="col-md-12">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city_name" class="col-md-12 col-form-label text-md-left">{{ __('Qyteti') }}</label>

                                <div class="col-md-12">
                                    <input id="city_name" type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name" value="{{ old('city_name') }}" required autocomplete="city_name">

                                    @error('city_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-12 col-form-label text-md-left">{{ __('Telefoni') }}</label>

                                <div class="col-md-12">
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="start_month" class="col-md-12 col-form-label text-md-left">{{ __('Fillimi muajit') }}</label>

                                <div class="col-md-12">
                                    <input id="start_month" type="text" class="form-control datepicker @error('start_month') is-invalid @enderror" name="start_month" value="{{ old('start_month') }}" autocomplete="start_month">

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
                                    <input id="end_month" type="text" class="form-control datepicker @error('end_month') is-invalid @enderror" name="end_month" value="{{ old('end_month') }}"  autocomplete="end_month">

                                    @error('end_month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="col">

                            <livewire:client-gate />



                            <div class="form-group">
                                <label for="packages" class="col-md-12 col-form-label text-md-left">{{ __('Sherbimet') }}</label>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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


                                </script>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ashensor" id="ashensor" name="packages[]">
                                        <input type="hidden" name="ashensor" value="">
                                        <label class="form-check-label" for="ashensor">
                                            Ashensori
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mbeturinat" id="mbeturinat" name="packages[]">
                                        <input type="hidden" name="mbeturinat"  value="">
                                        <label class="form-check-label" for="mbeturinat">
                                            Mbeturinat
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="internet" id="internet" name="packages[]">
                                        <input type="hidden" name="internet"  value="">
                                        <label class="form-check-label" for="internet">
                                            Interneti
                                        </label>
                                    </div>

                                </div>

                                <script>

                                    $(function() {
                                        $("#paid").attr("disabled","disabled");
                                    });
                                    var ashensor = $("#ashensor");
                                    var mbeturinat = $("#mbeturinat");
                                    var internet = $("#internet");

                                    ashensor.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                    mbeturinat.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                    internet.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                </script>

                                <hr>

{{--                                <div class="form-group">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="1" id="paid" name="paid">--}}
{{--                                        <label class="form-check-label" for="paid">--}}
{{--                                            E Paguar--}}
{{--                                        </label>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

                            </div>

                        </div>


                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" wire>
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
