<html>
<head>
<title>Data Pribadi Mahasiswa</title>
</head>

<body>
<?php 
$mahasiswa = new SimpleXMLElement('mahasiswa.xml', null, true);

echo "
<center><h1>Data Pribadi Mahasiswa</h1>
<table border=1>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Program Studi</th>
<th>Alamat</th>
<th>Agama</th>
<th>Tanggal Lahir</th>
<th>Nomor Telepon</th>
</tr></center>
 
";

foreach($mahasiswa as $data)
{
        echo "
<tr>
<td>{$data['nim']}</td>
<td>{$data->nama}</td>
<td>{$data->progdi}</td>
<td>{$data->alamat}</td>
<td>{$data->agama}</td>
<td>{$data->tgllahir}</td>
<td>{$data->telp}</td>
</tr>
 
";
}
echo '</table>';
?>
 
</body>
</html>