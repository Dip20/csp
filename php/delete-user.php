<?php
require_once("connection.php");
require_once("function.php");

if (isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];


  $sql = mysqli_query($conn,"UPDATE user_login SET is_deleted='1' WHERE ID='$del_id'");

    if($sql)
    {
      $url = base64_encode("Add User");
      redirect("../admin/index.php?li=$url&status=user_deleted");

    }else
    {
      redirect("../admin/index.php?li=$url&status=failed");

    }

  }



?>
