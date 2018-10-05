<form method="post">
	Nama <input type="text" name="nama"><br>
	NIM <input type="text" pattern="\d*" name="nim"><br>
	Tanggal lahir <input type="date" name="tgl_lahir"><br><br>
	<input type="submit" name="kirim">
</form>
<?php
	include("conn2.php");

	if(isset($_POST['kirim'])){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$tgl_lahir = $_POST['tgl_lahir'];

		$sql = "INSERT INTO mahasiswa(nama, nim, tgl_lahir) 
				VALUES ('$nama','$nim','$tgl_lahir')";

		if (mysqli_query($conn, $sql)) {
				echo "Barhasil Di Input";
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
