<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Client;
use App\Models\Damage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
       public function index(){

           if(Auth::user()->hasRole('user')){
               return view('userdash');
           }elseif(Auth::user()->hasRole('supervisor')){
               return view('supervisordash');
           }elseif(Auth::user()->hasRole('admin')){

               $users = User::all();
               $buildings = Building::all();
               $clients = Client::all();
               $damages = Damage::all();
               $paymentTotal = DB::table('clients')->sum('clients.payment');
               $paidTotal = DB::table('clients')->where('clients.paid',1)->sum('clients.payment');
               $debtTotal = DB::table('clients')->where('clients.paid',null)->sum('clients.payment');

               $paidTotalNameAndGates = Client::select('*')->where('clients.paid',1)->get();
               $debtTotalNameAndGates = Client::select('*')->where('clients.paid',null)->get();

               return view('dashboard',compact('users','buildings',
                   'clients','paymentTotal','paidTotal','debtTotal','paidTotalNameAndGates',
                   'debtTotalNameAndGates','damages' ));

       }
}

        public function profile(){
               return view('myprofile');
        }
}
