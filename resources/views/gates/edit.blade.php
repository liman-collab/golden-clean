@extends('layouts.main')

@section('content')

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-xl-5">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-primary float-left">Update Hyrjen</h5>
            </div>
            <div class="card-body col-md-12">
                <form class="text-md-left"  method="POST" action="{{route('gates.update', $gate->id)}}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="building_id" class="col-md-4 col-form-label text-md-left">{{ __('Banesa') }}</label>

                        <div class="col-md-6">

                            <select name="building_id" class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach($buildings as $building)
                                    <option value="{{$building->id}}" {{$building->id == $gate->building_id ? 'selected' : ''}}>{{$building->name}}</option>
                                @endforeach
                            </select>


                            @error('state_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Hyrja') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $gate->name) }}" required autocomplete="name" autofocus>

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
            <form method="POST" action="{{ route('gates.destroy', $gate->id) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete {{ $gate->name }}</button>
            </form>
        </div>

    </div>

@endsection

