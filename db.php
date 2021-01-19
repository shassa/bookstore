<?php
  $host="localhost";
  $username="root";
  $password="";
  $db_name="anime";
  $connection=mysqli_connect($host,$username,$password,$db_name);
  $file_uploads = "On";

  ob_start();
  ?>