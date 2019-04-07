<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tariff;
use PDF;

class TariffController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$tariff = Tariff::paginate(10);
        return view('tariff.index',['tariff' => $tariff]);   
    }

    public function add()
    {
    	return view('tariff.add');
    }

    public function save(Request $req)
    {
    	$tariff = new Tariff;
    	$tariff->tariff_codes = $req->tariff_codes;
    	$tariff->power = $req->power;
    	$tariff->tariff_per_kwh = $req->tariff_per_kwh;
    	$tariff->save();

    	return redirect()->route('admin.index.tariff');
    }

    public function edit($id)
    {
    	$tariff = Tariff::find($id);
  		return view('tariff.edit', ['tariff' => $tariff]);  
    }

    public function update(Request $req)
    {
    	$tariff = Tariff::find($req->input('id'));
    	$tariff->tariff_codes = $req->tariff_codes;
    	$tariff->power = $req->power;
    	$tariff->tariff_per_kwh = $req->tariff_per_kwh;
    	$tariff->save();

    	return redirect()->route('admin.index.tariff');
    }

    public function delete($id)
    {
    	$tariff = Tariff::find($id);
    	$tariff->delete();

    	return redirect()->route('admin.index.tariff');
    }

    public function pdf_tariff()
    {
        $tariff['stud'] = Tariff::all();
        $pdf = PDF::loadview('tariff.pdf', $tariff);
        return $pdf->download('tariff_data.pdf');
    }
}
