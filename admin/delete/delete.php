<?php
include '../db/db.php';
if(isset($_GET['id'])){
    $id_user=$_GET['id'];
 $delete="DELETE  FROM user WHERE id='$id_user'";
$result=mysqli_query($con,$delete);
if(!$result==NULL){
    echo "data is delete";

}else{
    echo "data is not delete";
}
}elseif(isset($_GET['category_id'])){
    $id_category=$_GET['category_id'];
     $delete="DELETE  FROM category WHERE id='$id_category'";
   $result=mysqli_query($con,$delete);
   if(!$result==NULL){
       echo "category is delete";
   
   }else{
       echo "data is not delete";
   }
   }

?>