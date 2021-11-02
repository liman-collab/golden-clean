<?php

namespace App\Http\Controllers;


use App\Http\Requests\GateStoreRequest;
use App\Models\Building;
use App\Models\Gate;
use Illuminate\Http\Request;

class GateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gates = Gate::all();
        return view('gates.index',compact('gates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::all();
        return view('gates.create',compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GateStoreRequest $request)
    {
        Gate::create([
            'building_id' => $request->building_id,
            'name' =>  $request->name,
        ]);

        return redirect()->route('gates.index')->with('message','Hyrja u kirjua me sukses');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gate $gate)
    {
        $buildings = Building::all();
        return view('gates.edit',compact('gate','buildings'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GateStoreRequest $request, Gate $gate)
    {
        $gate->update([
            'building_id' => $request->building_id,
            'name' => $request->name
        ]);
        return redirect()->route('gates.index')->with('message','Hyrja u azhornua me sukses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gate $gate)
    {
        $gate->delete();
        return redirect()->route('gates.index')->with('message','Hyrja u shlye me sukses');

    }
}
