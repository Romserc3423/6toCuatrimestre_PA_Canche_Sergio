<?php

include("configuracion.php");
$connection = new mysqli($server,$user,$password,$bd);
if(mysqli_connect_errno()){
    exit();
}
?>