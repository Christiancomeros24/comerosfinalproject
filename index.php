<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
        </table>
    </body>
</html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
       <form action="addtshirt.php">
           <label for='brand'>BRAND</label>
            <input type="text" id="brand" name="brand">
            <label for='color'>COLOR</label>
            <input type="text" id="color" name="color">
            <label for='size'>SIZE</label>
            <input type="text" id="size" name="size">
             <label for='price'>PRICE</label>
            <input type="text" id="price" name="price">
            <input type="submit" value="ADD" name="addshoe"/>
            </form>
        <table>
            <tr>
                <th>OID</th>
                <th>Brand</th>
                <th>COLOR</th>
                <th>SIZE</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>
       
     <?php
        $connection = mysqli_connect("localhost","root","","im_comerosdb");
        $sql = "SELECT * FROM tshirt";
       
       $result = $connection->query($sql);
     
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['Oid']."</td>";
            echo "<td>".$row['Brand']."</td>";
            echo "<td>".$row['Color']."</td> ";
            echo "<td>".$row['Size']."</td> ";
            echo "<td>".$row['Price']."</td> ";
            echo "<td>"
            . "<a class=\"btn\"href=\"edittshirtview.php?Oid=".$row['Oid']."\">Edit</a>"
                    . "<a class=\"btn\"href=\"deletetshirt.php?Oid=".$row['Oid']."\" onclick=\"return confirm('Delete im_comerosdb?')\">Delete</a>"
                    . "</td> ";
            echo "</tr>";
        }
       $connection->close();
     
     ?>
        </table>
    </body>
</html>
