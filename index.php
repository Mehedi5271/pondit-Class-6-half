<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="./add.php">Add New</a>

<?php 


?>

<?php 

session_start();
 if(isset( $_SESSION['message'])){
    echo $_SESSION['message'];
    unset( $_SESSION['message']);
 }


$products = $_SESSION['phone'];

?>

<form action="" method="post">
   <table border="1">
    
    <thead>
       
  <tr>
    <th>Serial</th>
    <th>Title</th> 
    <th>Action</th> 
  </tr>
   </thead>

    <?php 
        foreach($products as $key => $product){
        ?>

   <tbody>
  <tr>
    <td><?php echo $product['id'] ?>  </td>
    <td><?php echo $product['title'] ?></td>
    <td>
    <a href="./delete.php?index=<?= $key?>">Delete</a>
  </tr>
   </tbody>

    <?php  } ?>
 
</table>
</form>
    
</body>
</html>