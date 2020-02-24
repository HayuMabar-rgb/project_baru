<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    Protected $fillable = ['nama','id_mahasiswa'];
    public $timestamps=true;
    public function mahasiswa(){
        return $this->belongsTo('App\mahasiswa','id_mahasiswa');

    }

}
