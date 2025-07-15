<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color:   #393939 !important;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-content: center;
            margin-top: 300px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #D3D3D3;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }
        table {
            border:1px solid; 
            width:80%;
             text-align:center;
              margin:auto;
        }
    
nav ul li {
    list-style: none;
    display: inline-block;
}
nav ul li a {
    text-decoration: none;
    color: white;
    margin-left: 60px;
    font-size: 15px;
    font-weight: 600;
    border-bottom: 2px solid transparent;
    transition: .9s;

}
nav ul li a:hover {
    border-bottom: 2px solid white;
}
nav ul li.active a {
    border-bottom: 2px solid lightgreen;
}
    </style>    
</head>

<body>

             <?php  echo "<ul>";
                    echo  "<li><a href= Game.php>Home</a></li>";
                    echo  "<li class= active><a href= Shop.html >Shop</a></li>";
                    echo  "<li><a href= Event.html >Events</a></li>";
                    echo  "<li><a href= Contact2.php >Contact</a></li>";
                    echo  "</ul>";
                    ?>
<?php
echo "<table>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Price </th>";
echo "<th> Quantity </th>";
echo "<th> Edit </th>";
echo "<th> Delete </th>";
echo "</tr>";

require 'Connect1.php';
$sql="select * from cart";
$statemnt=$pdo->prepare($sql); 
// "<td><a href=updatecart.php?id=".$row['id']."> edit </a></td>".
$statemnt->execute();
$data=$statemnt->fetchAll();
foreach($data as $row)
   { echo "<tr>".
    
   " <td> ".$row['name']. " </td>" 
   ."<td>".$row['price']. "</td>".
   "<td>".$row['quantity']. "</td>".
   "<td>
   <form action= updatecart.php>
   <input type= number   name= product_quantity  value= ' . $product_quantity . '>
   <input type= hidden  name= product_id  value= ' .$id '>
   <button type= submit> Update</button>
   </form>
</td>".
   "<td> <a href=removecart.php?id=".$row['id']."> delete </a> </td>".
   "</tr>";
}

    
      
    

echo "</table>";

$pdo=null;
?>

<!-- <?php
        echo "<p>Total: $total JD<p/>";
 ?> -->
</br>
</br>
    
</body>
</html>