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
    echo "<script>
    
    alert('user data is insert');
    window.location.href='http://localhost/E_commerce_core_php/admin/user/user_table.php';
    
         </script> ";

   }else{
    echo "<script>
    
    alert('user data is not insert');
    
    
         </script> ";
   }

}

if(isset($_REQUEST['category'])){
  $name=$_REQUEST['name'];
   $category="INSERT INTO category(name,status)VALUES('$name','Active');";
 $category_res= mysqli_query($con, $category);
 if(!$category_res==NULL){
  echo "<script>
    
  alert('category is insert');
  window.location.href='http://localhost/E_commerce_core_php/admin/category/category_table.php';
  
       </script> ";

 }else{
  echo "<script>
    
  alert('category is not insert');
  
  
       </script> ";
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

    
    $product="INSERT INTO product(name,cat_id,title,description,brand,price,image,status)VALUES('$name','$category','$title','$des','$brand','$price','$image','Active');";
   $res_p= mysqli_query($con, $product);
   
   if(!$res_p==NULL){

    $upload=move_uploaded_file($tmp_image,"$uploads_dir/$image");
    echo "<script>
    
    alert('prduduct  data is insert');
    window.location.href='http://localhost/E_commerce_core_php/admin/product/product_table.php';
    
         </script> ";
   
    }else{
      echo"<script>
    
      alert('Product data is not insert');
      
      
           </script>";
    }

   }


?>