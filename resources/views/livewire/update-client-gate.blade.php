
<div>

    <label for="building_id" class="col-md-12 col-form-label text-md-left">{{ __('Banesa') }}</label>
    <select disabled  class="form-control" name="building_id" id="building_id" wire:model="buildingId">
        <option value="">Selekto Banesen</option>
        @foreach($buildings as $building)
            <option value="{{$building->id}}">{{$building->name}}</option>
        @endforeach
    </select>


    <label for="gate_id" class="col-md-12 col-form-label text-md-left">{{ __('Hyrja') }}</label>
    <select disabled class="form-control" name="gate_id" id="gate_id" wire:model="gateId">
{{--        <option value="">Selekto Hyrjen</option>--}}
{{--        @foreach($gates as $gate)--}}
            <option value="{{$gateId->id}}">{{$gateId->name}}</option>
{{--        @endforeach--}}
    </select>
{{--    {{$gateId->id}}--}}

{{--    <label for="gate_id" class="col-md-4 col-form-label text-md-left">{{ __('Hyrja') }}</label>--}}
{{--    <input disabled placeholder="{{$gateId->name}}" id="gate_id" type="text" class="form-control @error('gate_id') is-invalid @enderror" name="gate_id" value="{{ old('gate_id', $gateId->id) }}" required autocomplete="gate_id" autofocus>--}}
</div>


