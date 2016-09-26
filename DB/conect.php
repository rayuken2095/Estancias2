<?php
$user = 'root';
$password = 'root';
$db = 'vinculacion_est2';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

$link2 = mysqli_connect("localhost", "root", "root");
 mysqli_select_db($link, "vinculacion_est2");
if ($link->connect_errno) {
                   }

$conexion = new mysqli("localhost","root","root","vinculacion_est2");
  ?>
