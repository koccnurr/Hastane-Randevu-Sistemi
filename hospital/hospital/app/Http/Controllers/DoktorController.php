<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doktor;
use App\Models\Birim;


class DoktorController extends Controller
{
    public function getCreateDoktor(Request $request)
    {
        $doktor=Doktor::all();
        $birim=Birim::all();

        return view('admin.doctor.create-doctor',compact('doktor','birim'));
    }
    
    public function postCreateDoktor(Request $request)
    {
        $doktor = new Doktor();
        $doktor->create($request->all());
        return redirect()->route('getCreateDoktor');
    }
    public function getAllDoktor(Request $request)
    {
        $doktor =Doktor::all();
        $birim=Birim::all();

        return view('admin.doctor.all-doktor',compact('doktor'));
    }
    public function getEditDoktor(Request $request)
    {

        $birim=Birim::all();

        $doktor = Doktor::find($request->id);
        return view('admin.doctor.edit-doktor',compact('doktor','birim'));

    }
    public function postEditDoktor(Request $request)
    {
        $birim=Birim::all();

        $doktor = Doktor::find($request->id);
        $doktor->update($request->all());
        return redirect()->route('getAllDoktor');
    }



    public function getDeleteDoktor(Request $request)
    { 
        $doktor = Doktor::find($request->id);
        $doktor->delete();
        return redirect()->back()->with('success','Başarıyla Silindi');
    }
}