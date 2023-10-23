<?php
include '../db/db.php';


if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['number'];
    $address=$_REQUEST['address'];
    $password=$_REQUEST['password'];

   $insert="INSERT INTO user(name,email,number,address,password)VALUES('$name','$email','$phone','$address','$password');";
   $user= mysqli_query($con, $insert);
   if(!$user==NULL){
    echo "data is insert";

   }else{
    echo "not insert";
   }

}

if(isset($_REQUEST['category'])){
  $name=$_REQUEST['name'];
  $category="INSERT INTO category(name)VALUES('$name');";
 $category_res= mysqli_query($con, $category);
 if(!$category_res==NULL){
  echo "category is insert";

 }else{
  echo "not insert";
 }

}

if(isset($_REQUEST['product'])){
    $name=$_REQUEST['pname'];
    $category=$_REQUEST['cat'];
    $title=$_REQUEST['title'];
    $des=$_REQUEST['des'];
    $brand=$_REQUEST['brand'];
    $price=$_REQUEST['price'];
    $image=$_FILES['img']['name'];
    $tmp_image=$_FILES['img']['tmp_name'];
    $uploads_dir = '../product/product_image';

     $upload=move_uploaded_file($tmp_image,"$uploads_dir/$image");
    if(!$upload==NULL){
      echo "file is uploaded";
    $product="INSERT INTO product(name,cat_id,title,description,brand,price,image)VALUES('$name','$category','$title','$des','$brand','$price','$image');";
   $res= mysqli_query($con, $product);
   if(!$res==NULL){
    echo "data is insert";
   
    }else{
      echo "data is not insert";
    }

   }else{
    echo "file is not uploaded";
   }

}
?>