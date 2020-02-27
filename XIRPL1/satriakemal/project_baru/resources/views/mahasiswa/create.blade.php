@extends('layouts.app')
@section('content')
<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data mahasiswa
                </div>
                <div class="card-body">
                    <form action="{{route('mahasiswa.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">nama Dosen</label>
                            <select type="text" name="id_dosen" class="form-control" required>
                            @foreach($dosen as $data);
                            <option value="{{$data->id}}">{{$data->$nama}}</option>
                            @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Nama mahasiswa</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor induk siswa</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection