<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('relasi-1', function()
{
    $mhs=Mahasiswa::where('nim','=','10101010')->first();
    return $mhs->wali->nama;
});
Route::get('relasi-2',function()
{
    $mhs=Mahasiswa::where('nim','=','1010101')->first();
});
Route::get('relasi-3',function()
{
    $dosen = Dosen::where('nama','=nama','Abdul Musthafa')->first();
foreach($dosen->mahasiswa as $temp)
echo '<li> nama: '. $temp->nama .
'<strong>' .$temp->nim.'</strong>'.
'</li>';
});
Route::get('relasi-4',function()
{
$dadang = Mahasiswa::where('nama','=','dadang')->first();
foreach ($dadang ->hobi as $temp) {
    echo '<li>'. $temp->hobi . '</li>';
}
});
Route::get('relasi-5',function()
{
    $dota = Hobi::where('hobi','=','Dota 2')->first();

    foreach ($dota ->mahasiswa as $temp) {
        echo'<li> nama: '.$temp->nama . '<strong>'.
        $temp->nim .'<strong></li>';
    }});
    Route::get('relasi-jion',function()
    {
        $sql = DB::table('mahasiswas')
        ->select('mahasiswa.nama','mahasiswas.nim',
        'walis.nama as nama_wali')
        ->join('walis','walis.id_mahasiswa','=','mahasiswa.id')
        ->get();
        dd(sql);
    });
Route::get('eloquent',function()
{
    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent' ,compact('mahasiswa'));
});
Route::get('latihanel',function()
{
    $dsk = Mahasiswa::with('mahasiswa','dosen','hobi','wali')->get()->take(1);
    return view('eloquent',compact('mahasiswa'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('beranda', function(){
    return view('beranda');
});

Auth::routes();
Route::get('tentang' , function(){
    return view('tentang');
});
Auth::routes();
Route::get('kontak' , function(){


return view('kontak');
});
Route::resource('dosen','DosenController');

Route::resource('hobi','HobiController');

Route::resource('mahasiswa','MahasiswaController');