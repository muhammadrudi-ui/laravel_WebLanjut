<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>UTS CRUD Tabel Mahasiswa</title>
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Data Mahasiswa</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Tambah Data</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>NO.Telepon</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->kelas }}</td>
                    <td>{{ $m->jenis_kelamin }}</td>
                    <td>{{ $m->alamat }}</td>
                    <td>{{ $m->no_telp }}</td>
                    <td>
                        <form action="{{ route('mahasiswa.destroy',$m->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$m->id) }}">Edit</a>@csrf

                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </body>
        </html>