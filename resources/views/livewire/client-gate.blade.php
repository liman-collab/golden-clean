
<div>

    <div class="form-group">
        <label for="building_id" class="col-md-12 col-form-label text-md-left">{{ __('Banesa') }}</label>

        <div class="col-md-12">

            <select class="form-control" wire:model="selectedBuilding" id="building_id" name="building_id">
                <option value="">Selekto Banesen</option>
                @foreach ($buildings as $building)
                    <option value="{{ $building->id }}">{{ $building->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($gates))
        <div class="form-group">
            <label for="gate_id" class="col-md-12 col-form-label text-md-left">{{ __('Hyrja') }}</label>

            <div class="col-md-12">

                <select class="form-control @error('gate_id') is-invalid @enderror" wire:model="selectedGate" id="gate_id" name="gate_id">
                    <option value="">Selekto Hyrjen</option>
                    @foreach ($gates as $gate)
                        <option value="{{ $gate->id }}">{{ $gate->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('gate_id')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    @endif


</div>



