<?php
require_once("connection.php");
require_once("function.php");

if (isset($_POST['add_user_btn']))
{

  $username   = $_POST['username'];
  $contact    = $_POST['contact'];
  $password   = sha1($_POST['password']);
  $access  = $_POST['user_type'];

  $sql = mysqli_query($conn,"INSERT INTO user_login (username,contact,access,password,is_deleted) VALUES
  ('$username','$contact','$access','$password','0')");

    if($sql)
    {

      $url = base64_encode("Add User");
      redirect("../admin/index.php?li=$url&status=user_created");

    }else
    {
      redirect("../admin/index.php?li=$url&status=failed");

    }


  }



?>
