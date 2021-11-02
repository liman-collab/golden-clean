@extends('layouts.main')

@section('content')

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-5">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-primary float-left">Update Banesen</h5>
            </div>
            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('buildings.update', $building->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Emri') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $building->name) }}" required autocomplete="name" autofocus>

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
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="m-2 p-2">
            <form method="POST" action="{{ route('buildings.destroy', $building->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete {{ $building->name }}</button>
            </form>
        </div>

    </div>

@endsection

