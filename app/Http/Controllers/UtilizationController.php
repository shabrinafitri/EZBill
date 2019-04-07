<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilization;
use App\Customer;
use DB;
use App\Billing;
use App\Tariff;
use PDF;

class UtilizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$data["table"] = DB::table("utilization")->leftJoin('customer', 'utilization.id_customer', '=', 'customer.id_customer')->paginate(10);
        return view('utilization.index',$data);   
    }

    public function add()
    {
    	$customer = Customer::all();
    	return view('utilization.add')->with('customer', $customer);
    }

    public function save(Request $req)
    {
    	$utilization = new Utilization;
    	$utilization->id_customer = $req->id_customer;
    	$utilization->month = $req->month;
    	$utilization->year = $req->year;
    	$utilization->initial_meter = $req->initial_meter;
    	$utilization->final_meter = $req->final_meter;
    	$utilization->save();

    	$billing = new Billing;
 		$utilization1 = Utilization::where('id', $utilization->id)->first();
 		$amount_meter = $utilization1->final_meter - $utilization1->initial_meter;

 		$tariff_codes = Customer::where('id_customer', $req->input('id_customer'))->value('tariff_codes');
 		$tariff_per_kwh = Tariff::where('codes', $tariff_codes)->value('tariff_per_kwh');
 		
 		$billing_charges = $amount_meter * $tariff_per_kwh;
 		
 		$billing->id_util = $utilization->id;
 		$billing->id_customer = $req->id_customer;
 		$billing->month = $req->month;
 		$billing->year = $req->year;
 		$billing->amount_meter = $amount_meter;
 		$billing->month = $req->month;
 		$billing->billing_charges = $billing_charges;
 		$billing->status = $req->input('status');
 		$billing->save();

    	return redirect(route('admin.index.utilization'));
    }

    public function edit($id)
    {
    	$utilization = Utilization::find($id);
    	return view('utilization.edit', ['utilization' => $utilization]);
    }

    public function update(Request $req)
    {
    	$utilization = Utilization::find($req->input('id'));
    	$utilization->id_customer = $req->id_customer;
    	$utilization->month = $req->month;
    	$utilization->year = $req->year;
    	$utilization->initial_meter = $req->initial_meter;
    	$utilization->final_meter = $req->final_meter;
    	$utilization->save();

    	return redirect(route('admin.index.utilization'));
    }

    public function delete($id)
    {
    	$utilization = Utilization::find($id);
    	$utilization->delete();

    	return redirect(route('admin.index.utilization'));
    }

    public function pdf()
    {
        $utilization['stud'] = Utilization::all();
        $pdf = PDF::loadview('utilization.pdf', $utilization);
        return $pdf->download('utilization_data.pdf');
    }
}
