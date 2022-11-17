<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>CRUD</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Add Data Mahasiswa</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nim:</strong>
                            <input type="text" name="nim" class="form-control" placeholder="Nim">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kelas:</strong>
                            <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                            @error('kelas')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                            @error('jenis_kelamin')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Alamat:</strong>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                            @error('alamat')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>NO.Telepon:</strong>
                            <input type="text" name="no_telp" class="form-control" placeholder="No.Telepon">
                            @error('no_telp')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </form>
        </body>
        </html>