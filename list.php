<?php 
include("conn2.php");
 ?>
 <table border="1" width="40%" style="text-align: center;">
 	<tr>
 		<th>Nama</th>
 		<th>NIM</th>
 		<th>Tanggal Lahir</th>
 		<th>Actions</th>
 	</tr>

 	<?php

 	$sql = "SELECT * FROM mahasiswa";
 	$result = mysqli_query($conn, $sql);
 		if (mysqli_num_rows($result)>0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				?>
 				<tr>
 				<td><?php echo $row['nama']?></td>
 				<td><?php echo $row['nim']?></td>
 				<td><?php echo $row['tgl_lahir']?></td>
 				<td><a href="hapus.php?id=<?php echo $row['id']; ?>"> Hapus</a> | <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
 				</tr>
 				<?php
 			}
 		}else{
 			echo "0 results";
 		}
 		mysqli_close($conn);
 	?>
 </table>
