<?php
require_once("connection.php");
require_once("function.php");

if (isset($_GET['del_id']))
{
  $del_id = $_GET['del_id'];


  $sql = mysqli_query($conn,"UPDATE tbl_links SET is_deleted='1' WHERE link_id='$del_id'");

    if($sql)
    {
      $url = base64_encode($_GET['link_tab']);
      redirect("../admin/index.php?li=$url&status=link_deleted");

    }else
    {
      redirect("../admin/index.php?li=$url&status=failed");

    }

  }



?>
