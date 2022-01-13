<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Client;
use App\Models\Damage;
use App\Models\Gate;
use App\Models\Invoice;
use App\Models\Note;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
       public function index(){

           if(Auth::user()->hasRole('user')){

               $users = User::all();
               $buildings = Building::all();
               $clients = Client::all();
               $gates = Gate::all();
               $damages = Damage::all();
               $paymentTotal = DB::table('clients')->sum('clients.payment');
               $paidTotal = DB::table('clients')->where('clients.paid',1)->sum('clients.payment');
               $debtTotal = DB::table('clients')->where('clients.paid',null)->sum('clients.payment');

               $paidTotalNameAndGates = Client::select('*')->where('clients.paid',1)->get();
               $debtTotalNameAndGates = Client::select('*')->where('clients.paid',null)->get();

               $fixedDamages = DB::table('damages')->where('fixed',null)->get();

               $notes = Note::all();
               $currentTime = Carbon::now()->format('Y-m-d');
//               $paymentThroughInvoices = Client::select(
//
//                   "clients.id",
//                   "invoices.client_id"
//
//               )->join("invoices", "clients.id", "=", "invoices.client_id")
//
//                   ->where('invoices.created_at',$currentTime)->sum('clients.payment');

               $paymentThroughInvoices = Invoice::where('invoices.created_at',$currentTime)->sum('invoices.service_price');



//               $todayClientCreated = Client::select('name','last_name')->where('created_at','>=', Carbon::today())->get();
               $todayClientCreated = Client::select('name')->where('created_at','>=', Carbon::today())->get();

//               $data1 = [];
//               foreach($clients as $client) {
//                   $data1[] =
//                       $client->name;
//
//               }

               return view('dashboard',compact('users','buildings',
                   'clients','paymentTotal','paidTotal','debtTotal','paidTotalNameAndGates',
                   'debtTotalNameAndGates','damages','paymentThroughInvoices','fixedDamages','notes','currentTime','todayClientCreated','gates'));

           }elseif(Auth::user()->hasRole('supervisor')){
               return view('supervisordash');
           }elseif(Auth::user()->hasRole('admin')){

               $users = User::all();
               $buildings = Building::all();
               $clients = Client::all();
               $gates = Gate::all();
               $damages = Damage::all();
               $paymentTotal = DB::table('clients')->sum('clients.payment');
               $paidTotal = DB::table('clients')->where('clients.paid',1)->sum('clients.payment');
               $debtTotal = DB::table('clients')->where('clients.paid',null)->sum('clients.payment');

               $paidTotalNameAndGates = Client::select('*')->where('clients.paid',1)->get();
               $debtTotalNameAndGates = Client::select('*')->where('clients.paid',null)->get();

               $fixedDamages = DB::table('damages')->where('fixed',null)->get();

               $notes = Note::all();
               $currentTime = Carbon::now()->format('Y-m-d');
//               $paymentThroughInvoices = Client::select(
//
//                   "clients.id",
//                   "invoices.client_id"
//
//               )->join("invoices", "clients.id", "=", "invoices.client_id")
//
//                   ->where('invoices.created_at',$currentTime)->sum('clients.payment');

               $paymentThroughInvoices = Invoice::where('invoices.created_at',$currentTime)->sum('invoices.service_price');



//               $todayClientCreated = Client::select('name','last_name')->where('created_at','>=', Carbon::today())->get();
               $todayClientCreated = Client::select('name')->where('created_at','>=', Carbon::today())->get();

//               $data1 = [];
//               foreach($clients as $client) {
//                   $data1[] =
//                       $client->name;
//
//               }

               return view('dashboard',compact('users','buildings',
                   'clients','paymentTotal','paidTotal','debtTotal','paidTotalNameAndGates',
                   'debtTotalNameAndGates','damages','paymentThroughInvoices','fixedDamages','notes','currentTime','todayClientCreated','gates'));


           }
}




}
