<?php
$f="adasdasdasd";
//$conexion = new mysqli("localhost","root","","shareu");
$conexion = new mysqli("localhost","root","root","shareu");
 //$mysqli= new mysqli ("localhost","root","admin","shareu");
 
 $link = mysqli_connect("localhost", "root", "root");
	mysqli_select_db($link, "shareu");
if ($link->connect_errno) {
                    }

$mysqli= new mysqli ("localhost","root","root","shareu");
        if ($mysqli->connect_errno) {

                    }


?>