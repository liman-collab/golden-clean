<?php

namespace App\Http\Controllers;


use App\Http\Requests\InvoiceStoreRequest;
use App\Models\Building;
use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Support\Facades\View;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use PDF;



class InvoiceController extends Controller
{

    public function invoice($order_id,$month_id){


        if (Client::where('id',$order_id)->exists()){
            $clientOrders = Client::find($order_id);
            $dateTime = Carbon::now();
            $expireDateTime = Carbon::now()->addMonth();

            $serialNumber = rand(1,99999);


//            -----------
            $eachMonth = Carbon::create(Carbon::now()->year, $month_id+1, 1, 0);
//                dd( $eachMonth->format('Y-m-d'));
//            dd($month_id+1,$dateTime->month($month_id+1));
//            dd($dateTime->month($month_id+1));
//
//            $data = [
//                'clientOrders'=>$clientOrders,
//                'dateTime'=>$dateTime,
//                'expireDateTime'=>$expireDateTime
//            ];

            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHtml(
                View::make('invoices.generate-invoice',
                    compact('clientOrders','dateTime','expireDateTime','eachMonth','serialNumber'))->render()
            );

            return $pdf->stream();


            //nese dojm me bo download
            //                $pdf = PDF::loadView('invoices.orders.generate-invoice',$data);
            //                return $pdf->download('fatura.pdf');
        }
        else{
            return redirect()->back()->with('status','Nuk u gjet asnje klinet');
        }

    }

    public function saveInvoice($client_id,$month_id){

        Invoice::create([
            'client_id' => $client_id,
            'month_id'=>$month_id
        ]);
        return back();

    }

}
