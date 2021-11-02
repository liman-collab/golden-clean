<?php

namespace App\Http\Controllers;



use App\Http\Requests\DamageStoreRequest;
use App\Models\Damage;
use Illuminate\Http\Request;

class DamageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $damages = Damage::all();
        return view('damages.index',compact('damages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('damages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DamageStoreRequest $request)
    {
        Damage::create([
            'building_id' => $request->building_id,
            'gate_id' =>  $request->gate_id,
            'floor' => $request->floor,
            'damage' =>  $request->damage,
            'fixed' => $request->fixed

        ]);
        return redirect()->route('damages.index')->with('message','Prishja u krijua me sukses');

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
    public function edit(Damage $damage)
    {
        $selectedId = $damage->building_id;
        return view('damages.edit',compact('damage','selectedId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DamageStoreRequest $request,Damage $damage)
    {
        $damage->update([
            'id' => $request->id,
            'building_id' => $request->building_id,
            'gate_id' =>  $request->gate_id,
            'floor' =>  $request->floor,
            'damage' =>  $request->damage,
            'fixed' => $request->fixed
        ]);

        return redirect()->route('damages.index')->with('message','Prishja u azhornua me sukses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Damage $damage)
    {
        $damage->delete();
        return redirect()->route('damages.index')->with('message','Prishja u shlye me sukses');
    }
}
