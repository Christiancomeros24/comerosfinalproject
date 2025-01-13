<?php
     $brand = $_GET['brand'];
     $color = $_GET['color'];
     $size = $_GET['size'];
     $price = $_GET['price'];
     
     echo $brand." ".$color."size".$size."price".$price;
     
     $connection = mysqli_connect("localhost","root","","im_comerosdb");
     
     $sql = "INSERT INTO tshirt VALUES(0,'$brand','$color','$size','$price')";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");
