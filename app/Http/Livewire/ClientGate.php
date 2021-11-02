<?php

namespace App\Http\Livewire;

use App\Models\Building;
use App\Models\Gate;
use Livewire\Component;

class ClientGate extends Component
{

    public $selectedBuilding = null;
    public $selectedGate = null;
    public $gates = null;

    public function render()
    {
        return view('livewire.client-gate',[
            'buildings' => Building::all(),
        ]);
    }

    public function updatedSelectedBuilding($building_id)
    {
        $this->gates = Gate::where('building_id',$building_id)->get();
    }
}
