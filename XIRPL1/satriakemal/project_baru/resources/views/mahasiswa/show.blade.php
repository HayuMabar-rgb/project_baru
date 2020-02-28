@extends('layouts.app')
@section('content')
<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data mahasiswa
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama mahasiswa</label>
                        <input type="text" name="nama" value="{{$mahasiswa->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                            <label for="">Nomor induk mahasiswa</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <select type="text" name="id_dosen" value="{{$mahasiswa->nipd}}" class="form-control" readonly>
                        <option value="Ujang"></option>
                        <option value="Usman"></option>
                        <option value="Uus"></option>
                    </div>
                        <div class="form-group">
                        <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection