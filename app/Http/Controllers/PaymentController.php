<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Month;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();

        $months = Month::select(

            "months.id",
            "invoices.month_id",


        )->join("invoices", "months.id", "=", "invoices.month_id")

            ->get();

//        dd($months);

       return view('payments.index',compact('invoices'));
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');


        $reports = Invoice::where('created_at','>=',$fromDate)->where('created_at','<=',$toDate)->get();

        if ($reports->isEmpty()){
            return redirect()->route('payments.index')->with('message','Nuk gjendet asnje pages me datat e specifikuara');
        }

        return view('payments.index',compact('reports'));


    }
}
