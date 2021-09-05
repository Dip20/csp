<?php
   session_start();
   require_once("function.php");
   require_once("connection.php");
   $user_id = $_SESSION['user_id'];


   // user_logs($conn,$user_id,"You Loged Out!");

   unset($_SESSION);
   session_destroy();

   if (isset($_GET['admin']))
   {
     $is_Admin = $_GET['admin'];
     if ($is_Admin==1)
     {
       redirect("../admin/login.php");
     }
   }else
   {
        redirect("../login.php");
   }



?>
