<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AutoCompleteSearchController extends Controller
{

    public function getResult(Request $request)
    {
//        $data = Client::select('name')->where('name','LIKE',"%{$request->value}%")->get();

        $data = Client::where('name', 'LIKE', '%'. $request->value. '%')
            ->get();
        return response()->json($data);

    }


    public function searchClient(Request $request){
        $name = $request->input('clientName');

        $user = Client::where('name', '=',$name)->first();

        if ($user == null){
            return redirect()->back()->with('message2','Nuk u gjend asnje klient me kete emer');
        }

        $client = Client::select('gate_id')->where('name',$name)->first();
        //2
//        dd($client->gate_id);

        $invoiceClient = Invoice::select('id')->where('client_id',$client->id)->first();
        //13
        Session::put('name', $name);

        return redirect()->route('showclients.show',$client->gate_id);

    }

}
