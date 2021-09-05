<?php
require_once("connection.php");
require_once("function.php");

if (isset($_POST['add_link_btn']))
{

  $link_title   = $_POST['link_title'];
  $link_addredd = $_POST['link_addredd'];
  $link_tab     = $_POST['link_tab'];

  $sql = mysqli_query($conn,"INSERT INTO tbl_links(link_tab,link_title,link,is_deleted) VALUES
  ('$link_tab','$link_title','$link_addredd','0')");

    if($sql)
    {
      $url = base64_encode("$link_tab");
      redirect("../admin/index.php?li=$url&status=link_created");

    }else
    {
      redirect("../admin/index.php?li=$url&status=failed");
    }

  }



?>
