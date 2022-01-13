@extends('layouts.main')

@section('content')

    <div class="container-fluid" xmlns:livewire="http://www.w3.org/1999/html">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-10">

            <div class="card-header d-flex justify-content-between">
                <h5 class="m-0 font-weight-bold text-primary float-left">Update Prishjen</h5>

            </div>


            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('damages.update', $damage->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col">


                            <div class="form-group">
                                <label for="id" class="col-md-4 col-form-label text-md-left">{{ __('Id') }}</label>

                                <div class="col-md-12">
                                    <input disabled id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id', $damage->id) }}" required autocomplete="id" autofocus>

                                    @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <script type="text/javascript">

                                $('form').bind('submit', function () {
                                    $(this).find(':input').prop('disabled', false);
                                });
                            </script>

                            <livewire:update-client-gate selectedId={{$selectedId}}>


                                <div class="form-group">
                                    <label for="floor" class="col-md-12 col-form-label text-md-left">{{ __('Kati') }}</label>

                                    <div class="col-md-12">
                                        <input id="floor" type="text" class="form-control @error('floor') is-invalid @enderror" name="floor" value="{{ old('floor',$damage->floor) }}" >

                                        @error('floor')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="damage" class="col-md-12 col-form-label text-md-left">{{ __('Pershkrimi i problemit') }}</label>

                                    <div class="col-md-12">
                                        <input id="damage" type="text" class="form-control @error('damage') is-invalid @enderror" name="damage" value="{{ old('damage',$damage->damage) }}" >


                                        @error('damage')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1"
                                               {{!empty($damage->fixed)  ? 'checked' : ''}} id="fixed" name="fixed">
                                        <label class="form-check-label" for="fixed">
                                            E Rregulluar
                                        </label>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <div class="m-2 p-2">
            <form method="POST" action="{{ route('damages.destroy', $damage->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete {{ $damage->damage }}</button>
            </form>
        </div>



    </div>

@endsection

