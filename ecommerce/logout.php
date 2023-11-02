<?php
session_start();
unset($_SESSION['email']);
session_destroy();


echo"<script>
alert('Thanks for choosing me ');
window.location.href='index.php';
</script>";