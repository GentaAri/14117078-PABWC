<?php
include 'koneksi.php';
if(isset($_POST["hapus"])){
	$search = $_POST['delete'];
	$sql = "DELETE FROM mahasiswa WHERE nrp like '%$search%'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
}
if($query){
	echo "Data berhasil dihapus";
}else{
	echo "Error".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>