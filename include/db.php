<?php
//connection
$conn = mysqli_connect('localhost', 'root', '123456', 'realestate');

//if

if(mysqli_connect_errno()){
  //failed
  echo 'failed to connect to mysql'.$mysqli_connect_errno();
}


?>