<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Rudi</title>
</head>
<body>
    <h3><b>Data Produk</b></h3>
    <table border=1>
    <th>ID</th>
    <th>Nama</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>

    @foreach($produk as $p)
    <tr>
    <td>{{ $p-> id}}</td>
        <td>{{ $p-> nama}}</td>
        <td> {{ $p->harga_beli}}</td>
        <td> {{ $p->harga_jual}}</td>

    </tr>@endforeach
</body>
</table>