<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Ticket Konser</h1>

<table id="customers">
  <tr>
    <th>ID_Ticket</th>
    <th>Ticket</th>
    <th>Nama Pemesan</th>
    <th>Email</th>
    <th>No Telp</th>
    <th>Alamat</th>
  </tr>
  <tr>
    <td>{{ $tiket->id_uniq }}</td>
    <td>{{ $tiket->nama_tiket }}</td>
    <td>{{ $tiket->nama_pemesan }}</td>
    <td>{{ $tiket->email }}</td>
    <td>{{ $tiket->no_telp }}</td>
    <td>{{ $tiket->alamat }}</td>
  </tr>
</table>
<p>*Silahkan download tiket konser!!!</p>

</body>
</html>