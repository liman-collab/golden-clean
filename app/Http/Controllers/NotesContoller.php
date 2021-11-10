<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotesStoreRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $notes = Note::all();
//        return view('dashboard',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotesStoreRequest $request)
    {
        Note::create([
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('message','Shenimi u kirjua me sukses');
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
    public function edit($id)
    {
        return view('dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NotesStoreRequest $request,Note $note)
    {
        $note->update([
            'id' => $request->id,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('message','Shenimi u azhornua me sukses');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('dashboard')->with('message','Shenimi u shlye me sukses');
    }
}
