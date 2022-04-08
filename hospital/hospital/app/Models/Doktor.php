<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Doktor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="doktorlar";
    protected $fillable=['ad_soyad','birim_id'];
     public function birim()
    {
        return $this->hasOne('App\Models\Birim','id','birim_id');
    }

}
