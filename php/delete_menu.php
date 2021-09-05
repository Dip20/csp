<?php
require_once("connection.php");
require_once("function.php");

if (isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];


  $sql = mysqli_query($conn,"UPDATE tbl_menu SET is_deleted='1' WHERE menu_id='$del_id'");

    if($sql)
    {
      $url = base64_encode("Add Menu");
      redirect("../admin/index.php?li=$url&status=deleted");

    }else
    {
      redirect("../admin/index.php?li=$url&status=failed");

    }

  }



?>
