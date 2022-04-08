<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Randevu;
use App\Models\Doktor;
use App\Models\Birim;
use App\Models\User;
use Carbon\Carbon;
use Sentinel;
class RandevuController extends Controller
{

    public function getIndex(Request $request)
    {   $birim =Birim::all();
      $doktor=Doktor::all();
      $onuser = Sentinel::getUser();
      $hastarandevu = Randevu::where('ad_soyad',$onuser->id)->get();

      return view('randevu.index',compact('birim','request','doktor','onuser','hastarandevu'));

  }
  public function getRandevu(Request $request)
  {
    $randevular = Randevu::where('randevu_tarihi','>',Carbon::parse($request->randevu_tarihi)->StartOfDay())->where('randevu_tarihi','<',Carbon::parse($request->randevu_tarihi)->EndOfDay())->where('birim_id',$request->birim_id)->get();
    $pazar =Carbon::parse($request->randevu_tarihi)->isSunday();
    $cumartesi =Carbon::parse($request->randevu_tarihi)->isSaturday();
    $baslangictarihi = Carbon::parse($request->randevu_tarihi)->hour('08')->minute('0')->second(0);
    $bitistarihi = Carbon::parse($request->randevu_tarihi)->hour('17')->minute('0')->second(0);
    $oglearasibaslangic = Carbon::parse($request->randevu_tarihi)->hour('11')->minute('59')->second(0);
    $oglearasibitis = Carbon::parse($request->randevu_tarihi)->hour('12')->minute('59')->second(0);
    $cumartesibitis = Carbon::parse($request->randevu_tarihi)->hour('12')->minute('0')->second(0);
    $birim=Birim::all();
    $doktor=Doktor::all();       
    $onuser = Sentinel::getUser();     
    $hastarandevu = Randevu::where('ad_soyad',$onuser->id)->get();







    return view('randevu.index',compact('randevular','request','pazar','cumartesi','baslangictarihi','bitistarihi','oglearasibaslangic','oglearasibitis','cumartesibitis','birim','doktor','onuser','hastarandevu'));
}
public function postRandevu(Request $request)
{  
    $yenirandevu = new Randevu();
    $yenirandevu->randevu_tarihi = $request->randevu_tarihi;
    $yenirandevu->birim_id = $request->birim_id;
    $yenirandevu->doktor_id = $request->doktor_id;
    $yenirandevu->ad_soyad = $request->ad_soyad;




    $yenirandevu->save();

    return redirect()->back();
}
public function getAllRandevu(Request $request)
{
    $doktor=Doktor::all();
    $birim=Birim::all();
    $yenirandevu=Randevu::all();
    $user=User::all();
    return view('admin.randevu.all-randevu',compact('doktor','birim','yenirandevu','user'));




}
public function getLogOut(Request $request)
{
    Sentinel::logout();
    return redirect()->route('getRandevu');

}
public function getEditRandevu(Request $request)
{
    $yenirandevu = Randevu::find($request->id);
    $doktor=Doktor::all();
    $birim=Birim::all();
    $user=User::all();
    $onuser = Sentinel::getUser();     

    $hastarandevu = Randevu::where('ad_soyad',$onuser->id)->get();

    return view('randevu.edit-randevu',compact('yenirandevu','doktor','birim','user','hastarandevu','onuser'));

}



}
