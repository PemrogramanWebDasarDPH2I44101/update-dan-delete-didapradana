<?php  

	include("conn2.php");
	$id     = $_GET['id'];
	$update = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id = '$id'");
	$row    = mysqli_fetch_assoc($update);

?>
<form method="post">
	Nama <input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
	NIM <input type="text" pattern="\d*" name="nim" value="<?php echo $row['nim'];?>"><br>
	Tanggal lahir <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"><br><br>
	<input type="submit" name="kirim">
</form>
<?php
	

	if(isset($_POST['kirim'])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$tgl_lahir = $_POST['tgl_lahir'];

		$sql = "UPDATE mahasiswa SET nama='$nama', tgl_lahir='$tgl_lahir', nim='$nim' WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
				echo "<script>
         alert('Data berhasil di perbarui');
         location='list.php';
         </script>";
		}else{
			echo "Error" .$sql."<br>". mysqli_error($conn);
		}
		mysqli_close($conn);
		echo "<br>";
		echo "<br>";
		echo "Silahkan Klik link dibawah ini untuk melihat data <br>";
		?>
		<a href="list.php">View</a>
		<?php
	}
?>
