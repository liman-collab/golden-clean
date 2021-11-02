@extends('layouts.main')

@section('content')

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-7">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-primary float-left">Krijo Banesen</h5>
            </div>
            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('buildings.store')}}">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Emri') }}</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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

