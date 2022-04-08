<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birim;

class BirimController extends Controller{

    public function getCreateBirim(Request $request)
    {
        $birim=Birim::all();

        return view('admin.birim.birim-create',compact('birim'));
    }
    
    public function postCreateBirim(Request $request)
    {
        $birim = new Birim();
        $birim->create($request->all());
        return redirect()->route('getAllBirim');
    }

    public function getAllBirim(Request $request)
    {
        $birim =Birim::all();
        return view('admin.birim.all-birim',compact('birim'));
    }
    public function getEditBirim(Request $request)
    {
        

        $birim = Birim::find($request->id);
        return view('admin.birim.edit-birim',compact('birim'));

    }
    public function postEditBirim(Request $request)
    {
        $birim = Birim::find($request->id);
        $birim->update($request->all());
        return redirect()->route('getAllBirim');
    }



    public function getDeleteBirim(Request $request)
    { 
        $birim = Birim::find($request->id);
        $birim->delete();
        return redirect()->back()->with('success','Başarıyla Silindi');
    }
}
