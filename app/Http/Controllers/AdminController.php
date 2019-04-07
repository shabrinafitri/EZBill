<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use DB;
use App\Tariff;
use PDF;

class AdminController extends Controller
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

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function index_customer()
    {
        $customer = Customer::all();
        return view('admin.index-customer')->with('customer', $customer);
    }

    public function add_customer()
    {
        $tariff = Tariff::all();
        return view('admin.add-customer')->with('tariff',$tariff);
    }

    public function save_customer(Request $req)
    {
        $user_id = uniqid();

        $user = new User;
        $user->id_user = $user_id;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->role = $req->role;
        $user->save();        

        $customer = new Customer;
        $customer->id_customer = $user_id;
        $customer->name = $req->name;
        $customer->no_meter = str_random(10);
        $customer->address = $req->address;
        $customer->tariff_codes = $req->tariff_codes;
        $customer->save();

        return redirect()->route('admin.index.customer');
    }

    public function edit_customer($id)
    {
        $customer = Customer::where('id_customer', $id)->first();
        $tariff = Tariff::get();

        return view('admin.edit-customer', ['customer' => $customer, 'tariff' => $tariff]);
    }

    public function update_customer(Request $req)
    {
        $customer = Customer::find($req->input('id'));
        $customer->id_customer = $req->input('id_customer');
        $customer->name = $req->input('name');
        $customer->no_meter = $req->input('no_meter');
        $customer->address = $req->input('address');
        $customer->tariff_codes = $req->input('tariff_codes');
        $customer->save();

        return redirect()->route('admin.index.customer');
    }

    public function delete_customer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('admin.index.customer');        
    }

    public function pdf_customer()
    {
        $customer['stud'] = Customer::all();
        $pdf = PDF::loadview('admin.pdf-customer', $customer);
        return $pdf->download('customer_data.pdf');
    }
}
