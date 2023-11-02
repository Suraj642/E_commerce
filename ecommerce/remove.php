<?php
include 'db.php';
 $user=$_GET['user_id'];
 $product=$_GET['p_id'];
 $remove="DELETE FROM cart_item WHERE user_id='$user' and product_id='$product'";
 $result=mysqli_query($con,$remove);

 if(!$result==NULL){
    echo"<script>
         window.location.href='add_to_cart.php';
    </script>";
 }

?>