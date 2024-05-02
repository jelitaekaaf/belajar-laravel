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
        <h2>Data Tabel Merk</h2>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Merk</th>

        </tr>
        @php $no = 1; @endphp
        @foreach ($merk as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->nama_merk }}</td>
        
        </tr>
        @endforeach
     </table></center>
</body>
</html>