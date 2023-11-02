<?php
session_start();
include 'db.php';
$emali=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$login="SELECT * FROM user WHERE email='$emali' and password='$pass'";
$result_l=mysqli_query($con,$login);
$show_l=mysqli_fetch_assoc($result_l);
if(!$show_l==NULL){
    $_SESSION['email']=$show_l['email'];
    $_SESSION['id']=$show_l['id'];
    $_SESSION['name']=$show_l['name'];
    echo "<script>
    window.location.href='index.php';
    </script>";

}else{
    echo "<script>
    alert('Invailed username and password');
    window.location.href='login.php';
    </script>";
}
?>