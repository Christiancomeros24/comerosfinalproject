<?php

$Oid = $_GET['Oid'];


$connection = mysqli_connect("localhost","root","","im_comerosdb");
     
     $sql = "DELETE FROM tshirt WHERE Oid= $Oid";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");
