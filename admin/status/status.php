<?php 
include '../db/db.php';

if(isset($_GET['p_id'])){
     $id=$_GET['p_id'];
    $status="SELECT status FROM product where id='$id'";
    $res_s=mysqli_query($con,$status);
    $show_s=mysqli_fetch_assoc($res_s);
    if($show_s['status']=='Active'){
        $sql="UPDATE product SET status='Dactive' WHERE id='$id'";


    }else{
        $sql="UPDATE product SET status='Active' WHERE id='$id'";
    }
    $res=mysqli_query($con,$sql);
    if(!$res==NULL){
        echo"<script>
    window.location.href='http://localhost/E_commerce_core_php/admin/product/product_table.php';   
        </script>";
    }
    
}
if(isset($_GET['category_id'])){
    $id=$_GET['category_id'];
   $status="SELECT status FROM category where id='$id'";
   $res_s=mysqli_query($con,$status);
   $show_s=mysqli_fetch_assoc($res_s);
   if($show_s['status']=='Active'){
       $sql="UPDATE category SET status='Dactive' WHERE id='$id'";


   }else{
       $sql="UPDATE category SET status='Active' WHERE id='$id'";
   }
   $res=mysqli_query($con,$sql);
   if(!$res==NULL){
       echo"<script>
   window.location.href='http://localhost/E_commerce_core_php/admin/category/category_table.php';   
       </script>";
   }
   
}