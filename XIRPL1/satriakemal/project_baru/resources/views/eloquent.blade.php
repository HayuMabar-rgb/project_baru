<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($mahasiswa as $data)
    <h3> <-- nama -!> <small>[<--nim-!>]</small></h3>
    <h5> Hobi ?
        @foreach($data->hobi as $val)
        @section('konten')
        <small>//<!-- hobi -->
         </small>
        @endforeach
        </h5>
        <h4>
        <li>
        nama wali : <strong><!--Nama Wali --> </strong>
        </li>
        <li> dosen pembimbing : <strong>Chandra Liau</strong>
        </li>
        </h4>
        <hr>
        @endforeach
    </body>
</html>
