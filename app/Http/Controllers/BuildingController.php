<?php

namespace App\Http\Controllers;


use App\Http\Requests\BuildingStoreRequest;
use App\Models\Building;
use App\Models\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        return view('buildings.index',compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuildingStoreRequest $request)
    {
        Building::create([
            'name' => $request->name,
        ]);


        return redirect()->route('buildings.index')->with('message','Ashensori u regjistru me sukses');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $gates = Gate::where('building_id',$id)->get();
        $building = Building::where('id',$id)->first();
        $gatesId = Gate::where('building_id',$id)->first();

        if(empty($gatesId->id)){

            return redirect()->route('buildings.index')->with('message','Per momentin nuk asnje hyrje');
        }

        return view('buildings.show',compact('id','gates','building'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        return view('buildings.edit',compact('building'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BuildingStoreRequest $request, Building $building)
    {
        $building->update([
            'name' => $request->name,
        ]);
        return redirect()->route('buildings.index')->with('message','Banesa u azhornua me sukses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
//        dd($building->id);

        Gate::where('building_id',$building->id)->get();
        $building->delete();
//        dd($res);
        return redirect()->route('buildings.index')->with('message','Banesa u shlye me sukses');

    }


}
