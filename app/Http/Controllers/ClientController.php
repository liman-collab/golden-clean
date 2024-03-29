<?php

namespace App\Http\Controllers;


use App\Http\Requests\ClientStoreRequest;
use App\Models\Building;
use App\Models\Client;
use App\Models\Gate;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use phpDocumentor\Reflection\Types\Compound;
use Symfony\Component\Console\Input\Input;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $clients = Client::all();
        $paymentTotal = DB::table('clients')->sum('clients.payment');


        return view('clients.index',compact('clients','paymentTotal'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $buildings = Building::all();
//        $gates = Gate::all();
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientStoreRequest $request

     * @return \Illuminate\Http\Response
     */


    public function store(ClientStoreRequest $request)
    {


            $total = $request->mirembajtje13 + $request->mirembajtje14 + $request->mirembajtje15 +
                $request->mirembajtje10 + $request->internet + $request->tv + $request->parking;

//        dd($total);
                 Client::create([
//                'last_name' => $request->last_name,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'city_name' => $request->city_name,
                'start_month' => $request->start_month,
                'building_id' => $request->building_id,
                'gate_id' => $request->gate_id,
                'packages' => implode(' | ', $request->packages),
                'end_month' => $request->end_month,
                'mirembajtje13' => $request->mirembajtje13,
                'mirembajtje14' => $request->mirembajtje14,
                'mirembajtje15' => $request->mirembajtje15,
                'mirembajtje10' => $request->mirembajtje10,
                'internet' => $request->internet,
                'tv' => $request->tv,
                'parking' => $request->parking,
                'payment' => $total,
                'paid' => $request->paid
            ]);


//        dd($client);




        return redirect()->route('clients.index')->with('message','Klienti u regjistru me sukses');

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
    public function edit(Client $client)
    {

        $selectedId = $client->building_id;

        return view('clients.edit',compact('client','selectedId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientStoreRequest $request,Client $client)
    {


        $total = $request->mirembajtje13 + $request->mirembajtje14 + $request->mirembajtje15 +
            $request->mirembajtje10 + $request->internet + $request->tv + $request->parking;



            $client->update([
                'id' => $request->id,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'city_name' => $request->city_name,
                'start_month' => $request->start_month,
                'building_id' => $request->building_id,
                'gate_id' => $request->gate_id,
                'packages' => implode(' | ', $request->packages),
                'end_month' => $request->end_month,
                'mirembajtje13' => $request->mirembajtje13,
                'mirembajtje14' => $request->mirembajtje14,
                'mirembajtje15' => $request->mirembajtje15,
                'mirembajtje10' => $request->mirembajtje10,
                'internet' => $request->internet,
                'tv' => $request->tv,
                'parking' => $request->parking,
                'payment' => $total,
                'paid' => $request->paid
            ]);


          return redirect()->route('clients.index')->with('message', 'Banori u azhornua me sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
//        Invoice::where('client_id',$client->id)->delete();

        $client->delete();

        return redirect()->route('clients.index')->with('message','Banori u shlye me sukses');

    }



}
