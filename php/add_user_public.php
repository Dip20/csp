<?php
session_start();
require_once("connection.php");
require_once("function.php");

if (isset($_POST['add_user_btn']))
{

  $username   = $_POST['username'];
  $contact    = $_POST['contact'];
  $password   = sha1($_POST['password']);
  $role       = $_POST['user_role'];
  $access     = "User"; //default is user..
  $added_by   = $_SESSION['contact'];

  $sql = mysqli_query($conn,"INSERT INTO user_login (username,contact,access,password,is_deleted,role,added_by) VALUES
  ('$username','$contact','$access','$password','0','$role','$added_by')");

    if($sql)
    {

      $url = base64_encode("Add User");
      redirect("../index.php?li=$url&status=user_created");

    }else
    {
      redirect("../index.php?li=$url&status=failed");

    }


  }



?>
