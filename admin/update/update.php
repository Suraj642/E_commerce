<?php
include '../db/db.php';
if(isset($_REQUEST['user_update'])){
     $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $address=$_POST['address'];
  $updata="UPDATE user Set name='$name',email='$email',number='$number',address='$address', updated_at=CURRENT_TIMESTAMP WHERE id='$id'";
  $result=mysqli_query($con,$updata);
  if(!$result==NULL){
    echo "data is updated ";
  }else{
    echo "data is not update";
  }
}elseif(isset($_REQUEST['category_update'])){
  $id=$_POST['id'];
 $name=$_POST['name'];
$updata="UPDATE category Set name='$name', updated_at=CURRENT_TIMESTAMP WHERE id='$id'";
$result=mysqli_query($con,$updata);
if(!$result==NULL){
 echo "category is updated ";
}else{
 echo "data is not update";
}
}elseif(isset($_REQUEST['product_update'])){
  $id=$_POST['pid'];
 $name=$_POST['pname'];
 $title=$_POST['title'];
 $des=$_POST['des'];
 $brand=$_POST['brand'];
 $price=$_POST['price'];
 $image=$_FILES['img']['name'];
 $tmp_img=$_FILES['img']['tmp_name'];
 $file="../product/product_image/";

 if(!$tmp_img==NULL){

 $updata="UPDATE product Set name='$name',title='$title',description='$des',brand='$brand',price='$price',image='$image', updated_at=CURRENT_TIMESTAMP WHERE id='$id'";
 move_uploaded_file($tmp_img,$file.$image);
 }else{

 $updata="UPDATE product Set name='$name',title='$title',description='$des',brand='$brand',price='$price', updated_at=CURRENT_TIMESTAMP WHERE id='$id'";

 }
$result=mysqli_query($con,$updata);
if(!$result==NULL){
 echo "data is updated ";
}else{
 echo "data is not update";
}
}


?>