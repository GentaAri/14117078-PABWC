<html>
<head>

</head>
<body>
	<div>
		<h3>Detail Data</h3>
		<table border="1" cellpadding="5px">
			<thead>
				<tr>
					<th>NRP</th>
					<th>Nama</th>
					<th>Foto</th>
					<th>ID_Jur</th>
				</tr>
			</thead>
			<tbody>
<?php
include 'koneksi.php';
if(isset($_POST["cari"])){
	$search = $_POST['keyword'];
	$sql = "SELECT * FROM mahasiswa WHERE nama like '%$search%'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
}
				
$jumlah = mysqli_num_rows($query);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while ($baris = mysqli_fetch_array($query)) {
	$foto = "<img src='foto/".$baris['foto']."' alt='foto' width='100' height='100'>";
echo "<tr>
	<td>$baris[0]</td>
	<td>$baris[1]</td>
	<td>$foto</td>
	<td>$baris[3]</td>
	</tr>";


}
?>
		</tbody>
	</table>
</div>
</body>
</html>