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
                                <label for="name" class="col col-form-label text-md-left">{{ __('Emri dhe Mbiemri') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




{{--                            <div class="form-group">--}}
{{--                                <label for="last_name" class="col-md-12 col-form-label text-md-left">{{ __('Mbiemri') }}</label>--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>--}}

{{--                                    @error('last_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

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
                                        var $packages = $("#mirembajtje13");
                                        var $mirembajtje13 = $("input[name='mirembajtje13']");

                                        $packages.on('change', function() {
                                            $mirembajtje13.val(this.checked ? '13' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#mirembajtje14");
                                        var $mirembajtje14 = $("input[name='mirembajtje14']");

                                        $packages.on('change', function() {
                                            $mirembajtje14.val(this.checked ? '14' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#mirembajtje15");
                                        var $mirembajtje15 = $("input[name='mirembajtje15']");

                                        $packages.on('change', function() {
                                            $mirembajtje15.val(this.checked ? '15' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#mirembajtje10");
                                        var $mirembajtje10 = $("input[name='mirembajtje10']");

                                        $packages.on('change', function() {
                                            $mirembajtje10.val(this.checked ? '10' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#internet");
                                        var $internet = $("input[name='internet']");

                                        $packages.on('change', function() {
                                            $internet.val(this.checked ? '10' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#tv");
                                        var $tv = $("input[name='tv']");

                                        $packages.on('change', function() {
                                            $tv.val(this.checked ? '10' : null);
                                        });
                                    });
                                    $(function() {
                                        var $packages = $("#parking");
                                        var $parking = $("input[name='parking']");

                                        $packages.on('change', function() {
                                            $parking.val(this.checked ? '3' : null);
                                        });
                                    });

                                </script>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje13" id="mirembajtje13" name="packages[]">
                                        <input type="hidden" name="mirembajtje13" value="">
                                        <label class="form-check-label" for="mirembajtje13">
                                            Mirembajtje 13
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje14" id="mirembajtje14" name="packages[]">
                                        <input type="hidden" name="mirembajtje14"  value="">
                                        <label class="form-check-label" for="mirembajtje14">
                                            Mirembajtje 14
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje15" id="mirembajtje15" name="packages[]">
                                        <input type="hidden" name="mirembajtje15"  value="">
                                        <label class="form-check-label" for="mirembajtje15">
                                            Mirembajtje 15
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje10" id="mirembajtje10" name="packages[]">
                                        <input type="hidden" name="mirembajtje10"  value="">
                                        <label class="form-check-label" for="mirembajtje10">
                                            Mirembajtje 10
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="internet" id="internet" name="packages[]">
                                        <input type="hidden" name="internet"  value="">
                                        <label class="form-check-label" for="internet">
                                            Interneti
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="tv" id="tv" name="packages[]">
                                        <input type="hidden" name="tv"  value="">
                                        <label class="form-check-label" for="tv">
                                            TV
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="parking" id="parking" name="packages[]">
                                        <input type="hidden" name="parking"  value="">
                                        <label class="form-check-label" for="parking">
                                            Parking
                                        </label>
                                    </div>

                                </div>

                                <script>

                                    $(function() {
                                        $("#paid").attr("disabled","disabled");
                                    });
                                    var mirembajtje13 = $("#mirembajtje13");
                                    var mirembajtje14 = $("#mirembajtje14");
                                    var mirembajtje15 = $("#mirembajtje15");
                                    var mirembajtje10 = $("#mirembajtje10");
                                    var internet = $("#internet");
                                    var tv = $("#tv");
                                    var parking = $("#parking");

                                    mirembajtje13.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                    mirembajtje14.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                    mirembajtje15.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                    mirembajtje10.click(function() {
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
                                    tv.click(function() {
                                        if ($(this).is(":checked")) {
                                            $("#paid").removeAttr("disabled");
                                        } else {
                                            $("#paid").attr("disabled", "disabled");
                                        }
                                    });
                                    parking.click(function() {
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
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
