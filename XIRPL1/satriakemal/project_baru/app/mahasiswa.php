<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    Protected $fillable = ['nama','nim','id_dosen'];
    public $timestamps=true;
   public function mahasiswa(){
       return $this->belongsTo('App\mahasiswa','mahasiswa_hobi','id_mahasiswa','id_hobi');
}
public function Wali(){
    return $this->hasOne('App\mahasiswa','id_mahasiswa');
}
public function Hobi(){
    return $this->belongsToMany('App\hobi','mahasiswa_hobi','id_mahasiswa','id_hobi');
}
}