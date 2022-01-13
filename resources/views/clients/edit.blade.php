@extends('layouts.main')

@section('content')

    <div class="container-fluid" xmlns:livewire="http://www.w3.org/1999/html">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-10">

            <div class="card-header d-flex justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary float-left">Update Banorin</h5>


                {{--                <td><a href="{{route('clients.edit', $client->id, $client->building_id)}}" class="btn btn-success">Edit</a></td>--}}

{{--                <a href="{{url('generate-invoice/'.$client->id)}}" target="_blank" type="button" class="{{empty($client->paid)  ? 'd-none' : 'd-sm-inline-block btn btn-sm btn-primary shadow-sm'}}"><i--}}
{{--                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
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
                                <label for="name" class="col col-form-label text-md-left">{{ __('Emri dhe Mbiemri') }}</label>

                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $client->name) }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



{{--                            <div class="form-group">--}}
{{--                                <label for="last_name" class="col-md-4 col-form-label text-md-left">{{ __('Mbiemri') }}</label>--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', $client->last_name) }}" required autocomplete="last_name" autofocus>--}}

{{--                                    @error('last_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
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


                                    $('form').bind('submit', function () {
                                        $(this).find(':input').prop('disabled', false);
                                    });
                                </script>

                                <div class="form-group">
                                    <label for="date_registered" class="col-md-12 col-form-label text-md-left">{{ __('Sherbimet') }}</label>

                                    {{--                                <div class="col-md-12">--}}
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje13"
                                               {{!empty($client->mirembajtje13)  ? 'checked' : ''}} id="mirembajtje13" name="packages[]">
                                        <input type="hidden" name="mirembajtje13" value="{{$client->mirembajtje13}}">
                                        <label class="form-check-label" for="mirembajtje13">
                                            Mirembajtje 13
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje14" id="mirembajtje14"
                                               {{!empty($client->mirembajtje14)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="mirembajtje14" value="{{$client->mirembajtje14}}">
                                        <label class="form-check-label" for="mirembajtje14">
                                            Mirembajtje 14
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje15" id="mirembajtje15"
                                               {{!empty($client->mirembajtje15)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="mirembajtje15" value="{{$client->mirembajtje15}}">
                                        <label class="form-check-label" for="mirembajtje15">
                                            Mirembajtje 15
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="mirembajtje10" id="mirembajtje10"
                                               {{!empty($client->mirembajtje10)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="mirembajtje10" value="{{$client->mirembajtje10}}">
                                        <label class="form-check-label" for="mirembajtje10">
                                            Mirembajtje 10
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
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="tv" id="tv"
                                               {{!empty($client->tv)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="tv" value="{{$client->tv}}">
                                        <label class="form-check-label" for="tv">
                                            TV
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="parking" id="parking"
                                               {{!empty($client->parking)  ? 'checked' : ''}}
                                               name="packages[]">
                                        <input type="hidden" name="parking" value="{{$client->parking}}">
                                        <label class="form-check-label" for="parking">
                                            Parking
                                        </label>
                                    </div>

                                    {{--                                </div>--}}
                                    <hr>
                                </div>

{{--                                <div class="form-group">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="1"--}}
{{--                                               {{!empty($client->paid)  ? 'checked' : ''}} id="paid" name="paid">--}}
{{--                                        <label class="form-check-label" for="paid">--}}
{{--                                            E Paguar--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

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
                <button class="btn btn-danger">Delete {{ $client->name }}</button>
            </form>
        </div>



    </div>

@endsection

