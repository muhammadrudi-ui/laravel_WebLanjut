<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Data Post - SantriKoding.com</title>
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" 
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">Nim</label>
                            <input type="text" class="form-control" name="nim" value="{{ old('nim', $mahasiswa->nim) }}">
                        </div>
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Post" 
                            value="{{ old('nama', $mahasiswa->nama) }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kelas</label>
                            <input name="kelas" type="text" class="form-control" placeholder="Masukkan Kelas Post" 
                            value="{{ old('kelas', $mahasiswa->kelas) }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Jenis Kelamin</label>
                            <input name="jenis_kelamin" type="text" class="form-control" placeholder="Masukkan Jenis_Kelamin Post" 
                            value="{{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat Post" 
                            value="{{ old('alamat', $mahasiswa->alamat) }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">No.Telepon</label>
                            <input name="no_telp" type="text" class="form-control" placeholder="Masukkan No.Telepon Post" 
                            value="{{ old('no_telp', $mahasiswa->no_telp) }}">
                        </div>
                        
                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>