@extends('layouts.app')
@section('content')
<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ubah Data hobi
                </div>
                <div class="card-body">
                    <form action="{{route('hobi.update',$hobi->id)}}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama hobi</label>
                            <input type="text" name="nama" value="{{$hobi->nama}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor induk mahasiswa</label>
                            <input type="text" name="nim" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nd" class="form-control" required>
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