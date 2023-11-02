<?php
include '../db/db.php';
if(isset($_GET['id'])){
    $id_user=$_GET['id'];
 $delete="DELETE  FROM user WHERE id='$id_user'";
$result=mysqli_query($con,$delete);
if(!$result==NULL){
    echo "<script>
    
    alert('user data is delete');
    window.location.href='http://localhost/E_commerce_core_php/admin/user/user_table.php';
    
         </script> ";

}else{
    echo "<script>
    
    alert('user data is not delete');
     </script> ";
}
}elseif(isset($_GET['category_id'])){
    $id_category=$_GET['category_id'];
     $delete="DELETE  FROM category WHERE id='$id_category'";
   $result=mysqli_query($con,$delete);
   if(!$result==NULL){
    echo "<script>
    
    alert('category is delete');
    window.location.href='http://localhost/E_commerce_core_php/admin/category/category_table.php';
    
         </script> ";
   
   }else{
    echo "<script>
    
    alert('category is not  delete');
    
    
         </script> ";
   }
   }elseif(isset($_GET['p_id'])){
    $p_id=$_GET['p_id'];
     $delete="DELETE  FROM product WHERE id='$p_id'";
   $result=mysqli_query($con,$delete);
   if(!$result==NULL){
    echo "<script>
    
    alert('product is delete');
    window.location.href='http://localhost/E_commerce_core_php/admin/product/product_table.php';
    
         </script> ";
   
   }else{
    echo "<script>
    
    alert('product  is not delete');
    
    
         </script> ";
   }
   }


?>