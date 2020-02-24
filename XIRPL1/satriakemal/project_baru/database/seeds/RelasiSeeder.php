<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;

class RelasiSeeder extends Seeder


{
    public function run()
    {
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobi')->delete();
        DB::table('mahasiswa_hobis')->delete();



        $dosen = Dosen::create([
        'nama' => 'abdul mustafa',
        'nipd' => ' 123456789'
    ]);
    $this->command->info('data Dosen Berhasil Dibuat');

    $mamat = Mahasiswa::create([
        'nama' => 'mamat karbit',
        'nim' => '109109',
        'id_dosen'=>$dosen->id
    ]);
    $dadang = Mahasiswa::create([
        'nama'=>'Dadang Peloy',
        'nim'=>'109192',
        'id_dosen'=>$dosen->id
    ]);
    $dadang = Mahasiswa::create([
        'nama'=>'feri ambyar supriyadi',
        'nim'=>'109192',
        'id_dosen'=>$dosen->id
    ]);
    $ahmad = Wali::create([
        'nama ' => 'ahmad',
        'id_mahasiswa' => $mamat->id
    ]);$dudung = Wali::create([
        'nama ' => 'dudung',
        'id_mahasiswa' => $dadang->id
    ]);$mamat = Wali::create([
        'nama ' => 'mamat',
        'id_mahasiswa' => $mamat->id
    ]);
    $basit = Wali::create([
        'nama ' => 'basit',
        'id_mahasiswa' => $feri->id
    ]);
    $mancing = Hobi::create([
        'hobi' => 'mancing keributan'
    ]);
    $gaming = Hobi ::create([
        'hobi' => 'Game Mobile'
    ]);
    $mengaji = Hobi::create([
        'hobi' => 'ngaji bagong'
    ]);
    //melampirkan Hobi ke mahasiswa
    $mamat->$hobi->attack($mancing->id);
    $mamat->$hobi->attack($mengaji->id);
    $dadang->$hobi->attack($gaming->id);
    $feri->$hobi->attach($mengaji->$id);
    $this->command->info('data hobi Mahasiswa berhasil dibuat');
    $this->command->info('Data Mahasiswa Berhasil Dibuat');
    
        //
    }
}
