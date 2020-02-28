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
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama hobi</label>
                            <input type="text" name="nama" value="{{$mahasiswa->nama}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor induk mahasiswa</label>
                            <input type="text" name="nim" value ="{{$mahasiswa->nim}}"class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <select name="id_dosen" type="text" class="form-control" required>
                            foreach($dosen as $data)
                            <option value="{{$data->id}}"
                            {{ $data ->id == $mahasiswa->id_dosen?"selected":""}}>
                            {{$data->nama}}
                            }}</option>
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