<?php
  include("conn2.php");

  $id = $_GET['id'];

  $sql = "DELETE FROM mahasiswa WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
      echo "<script>
           alert('Data berhasil di simpan');
           location='list.php';
           </script>";
  }else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>
