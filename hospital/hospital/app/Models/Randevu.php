<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Randevu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "randevular";
    protected $fillable=['randevu_tarihi','saat_araligi_id','ad_soyad','birim_id','doktor_id'];
    
    public function birim()
    {
        return $this->hasOne('App\Models\Birim','id','birim_id');
    }
        public function doktor()
    {
        return $this->hasOne('App\Models\Doktor','id','doktor_id');
    }
     public function user()
    {
        return $this->hasOne('App\Models\User','id','ad_soyad');
    }
}
