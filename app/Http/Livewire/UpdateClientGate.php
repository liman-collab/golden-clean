<?php

namespace App\Http\Livewire;

use App\Models\Building;
use App\Models\Gate;
use Livewire\Component;

class UpdateClientGate extends Component
{

    public $buildings;
    public $buildingId;
    public $gates;
    public $gateId;



    public function mount($selectedId)
    {
        $this->buildingId = $selectedId;

        $this->buildings = Building::orderby('id')->get();

        $this->gateId = Gate::where('building_id',$this->buildingId)->first();


    }
    public function render()
    {
        return view('livewire.update-client-gate');

    }


//    public function updatedBuildingId()
//    {
//        $this->gates = Gate::where('id',$this->buildingId)->get();
//
//        $this->gates[0]->building_id; //2  2 BUILDINGS
//        $this->gates[0]->id; //3  3 GATES
//
//        $this->gateId = $this->gates[0]->building_id;
//
//        $this->newGate($this->gateId);
//    }
//
//    public function newGate($gateId){
//
//        $this->buildingId = $gateId;
//
//        $this->buildings = Building::orderby('id')->get();
//
//        $this->gates = Gate::where('id',$gateId)->get();
//
//    }


}
