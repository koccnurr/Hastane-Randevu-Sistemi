<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Birim extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="birim";
    protected $fillable=['adi'];
    public function doktor()
    {
        return $this->hasMany('App\Models\Doktor','birim_id','id');
    }

}
