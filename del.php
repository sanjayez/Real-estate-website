<?php
  require('./include/db.php');

  $id = $_GET['id'];
  //ceate query  
  $query = 'DELETE FROM posts WHERE id = '.$id;
  
  mysqli_query($conn, $query);

  header("Refresh:0; url=welcomeAdmin.php");

  mysqli_close($conn);
  
?>
