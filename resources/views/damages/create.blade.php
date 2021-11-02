@extends('layouts.main')

@section('content')

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-7">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-primary float-left">Krijo Prishjen</h5>
            </div>
            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('damages.store')}}">
                    @csrf


                    <livewire:client-gate />

                    <div class="form-group">
                        <label for="floor" class="col-md-12 col-form-label text-md-left">{{ __('Kati') }}</label>

                        <div class="col-md-12">
                            <input id="floor" type="text" class="form-control @error('floor') is-invalid @enderror" name="floor" value="{{ old('floor') }}" >

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
                            <input id="damage" type="text" class="form-control @error('damage') is-invalid @enderror" name="damage" value="{{ old('damage') }}" >


                            @error('damage')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="fixed" name="fixed">
                            <label class="form-check-label" for="fixed">
                                E Rregulluar
                            </label>
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

