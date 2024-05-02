<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <center><table border="1">
        <h2>Data Tabel Produk</h2>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Tanggal Produksi</th>
            <th>Id Merk</th>
         
        </tr>
        @php $no = 1; @endphp
        @foreach ($produk as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama_produk }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>{{ $data->tanggal_produk }}</td>
            <td>{{ $data->merk ->nama_merk }}</td>
        </tr>
        @endforeach
     </table></center>
</body>
</html>