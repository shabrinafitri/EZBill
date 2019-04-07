<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Billing;
use App\Payment;
use DB;
use PDF;

class PaymentController extends Controller
{

	public function index()
	{
		$data["table"] = DB::table("payment")->leftJoin('billing', 'payment.id_customer', '=', 'billing.id_customer')->paginate(10);
		return view('payment.index',$data);
	}
    public function add($id)
    {
    	$billing = Billing::find($id);
    	return view('payment.add',['billing' => $billing]);
    }

    public function save(Request $req)
    {
    	$billing = Billing::find($req->input('id_billing'));
    	$billing->status = "2";
    	$billing->save();

    	$payment = new Payment;
    	$payment->id_util = $billing->id;
    	$payment->id_payment = uniqid();
    	$payment->id_customer = $req->input('id_customer');
    	$payment->billing_month = $req->input('billing_month');
    	$payment->date = $req->input('date');

    	$payment->save();

    	return redirect(route('admin.index.payment'));
    }

    public function pdf()
    {
        $payment['stud'] = Payment::all();
        $pdf = PDF::loadview('payment.pdf', $payment);
        return $pdf->download('payment_data.pdf');
    }
}