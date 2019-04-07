<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Utilization;
use App\Billing;
use App\Tariff;
use DB;

class BillingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 	
 	public function index()
 	{
 		$data["table"] = DB::table("billing")->leftJoin('customer', 'billing.id_customer', '=', 'customer.id_customer')->paginate(10);
 		return view('bill.index', $data);
 	}

 	public function add()
 	{
 		$customer = Customer::all();
 		return view('bill.add')->with('customer', $customer);
 	} 

 	// public function save(Request $req)
 	// {
 	// 	$billing = new Billing;
 	// 	$utilization1 = Utilization::where('id_customer', $req->input('id_customer'))->value('initial_meter');
 	// 	$utilization2 = Utilization::where('id_customer', $req->input('id_customer'))->value('final_meter');
 	// 	$amount_meter = $utilization2 - $utilization1;

 	// 	$tariff_codes = Customer::where('id_customer', $req->input('id_customer'))->value('tariff_codes');
 	// 	$tariff_per_kwh = Tariff::whereTariffCodes($tariff_codes)->value('tariff_per_kwh');
 		
 	// 	$billing_charges = $amount_meter * $tariff_per_kwh;
 		
 	// 	$billing->id_customer = $req->input('id_customer');
 	// 	$billing->month = $req->input('month');
 	// 	$billing->year = $req->input('year');
 	// 	$billing->amount_meter = $amount_meter;
 	// 	$billing->month = $req->month;
 	// 	$billing->billing_charges = $billing_charges;
 	// 	$billing->status = $req->input('status');
 	// 	$billing->save();

 	// 	return redirect()->route('admin.index.billing');
 	// }

 	public function pdf()
    {
        $billing['stud'] = Billing::all();
        $pdf = PDF::loadview('bill.pdf', $billing);
        return $pdf->download('billing_data.pdf');
    }  
}
