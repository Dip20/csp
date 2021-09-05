<?php
require_once("connection.php");
require_once("function.php");

if (isset($_POST['add_menu_btn']))
{
  $menu_name = $_POST['menu_name'];


  $sql = mysqli_query($conn,"INSERT INTO tbl_menu(menu_name,is_deleted) VALUES
  ('$menu_name','0')");

    if($sql)
    {
      $url = base64_encode("Add Menu");
      redirect("../admin/index.php?li=$url&status=created");

    }else
    {
      redirect("../admin/index.php?li=$url&status=failed");

    }


  }



?>
