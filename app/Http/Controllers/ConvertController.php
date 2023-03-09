<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convert;

class ConvertController extends Controller
{

    public function index()
    {
        $dtConvert = Convert::all();

        return view('home',compact('dtConvert'));
    }

    public function tambah()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // untuk mengecek kirim data
        // dd($request->all());

        Convert::create([
            'amount' => $request->amount,
            'currency_from' => $request->currency_from,
            'currency_to' => $request->currency_to,
            'converted_amount' => '',
            'status' => '1',

        ]);
        return redirect('home');
    }


    public function konversi($id)
    {
        $kvs = Convert::findorfail($id);
        return view('konversi', compact('kvs'));
    }

    public function updkonversi(Request $request, $id)
    {
        $kvs = Convert::findorfail($id);
        $kvs->update([
                'converted_amount' => $request->converted_amount,
                'status' => '2',

            ]);
            return redirect('home');
    }

    public function edit($id)
    {
        $editdata = Convert::findorfail($id);
        return view('edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $editdata  = Convert::findorfail($id);
        $editdata ->update([
                'amount' => $request->amount,
                'currency_from' => $request->currency_from,
                'currency_to' => $request->currency_to,
                'converted_amount' => ' ',
                'status' => '1',

            ]);
            return redirect('home');
    }

    public function destroy($id)
    {
        $dtConvert  = Convert::findorfail($id);
        $dtConvert->delete();
        return back();
    }

}
