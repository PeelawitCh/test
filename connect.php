<?php

$conn = mysqli_connect("localhost","root","","bookstore");
mysqli_set_charset($conn, 'utf8');
if (mysqli_connect_errno()) {
  // code...
  echo "Failed to connect : ".mysqli_connect_error();
}else{
  //echo "Connected";
}
//mysqli_set_chaset($conn,"utf8");

 ?>
