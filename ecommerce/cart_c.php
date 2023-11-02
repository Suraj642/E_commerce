<?php 
include 'db.php';
if(isset($_REQUEST['submit'])){
$qty=$_REQUEST['quantity'];
$p_id=$_REQUEST['pruduct'];
$u_id=$_REQUEST['user'];
 $cart="INSERT INTO cart_item(product_id,user_id,qunitity)VALUES('$p_id','$u_id','$qty')";
$res=mysqli_query($con,$cart);
if(!$res==NULL){
    echo"<script>
    window.location.href='product_details.php';
</script>";
}

}



?>