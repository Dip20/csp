<?php
session_start();
require_once("connection.php");
require_once("function.php");


if (isset($_POST['login_btn']))
{
  //declear var.
  $login_mobile_no   = safe_val($conn,$_POST['mobile_no']);
  $login_pass        = safe_val($conn,$_POST['password']);
  $login__pass_hash  = sha1(safe_val($conn,$_POST['password']));

  $validate = mysqli_query($conn,"SELECT * FROM user_login WHERE contact='$login_mobile_no' AND is_deleted='0' AND status='0' AND access='Admin'");

  if($validate)
  {
    if(mysqli_num_rows($validate)>0)
    {
      $data    = mysqli_fetch_assoc($validate);
      $db_pass = $data['password'];
      if ($db_pass==$login__pass_hash)
      {
        // password matched check if the user is not blocked.
        if ($data['status']==0)
        {
          // user is not block so store info in session and  redirect to dashboard
          $_SESSION['is_loged']        = true;
          $_SESSION['user_id']         = $data['ID'];
          $_SESSION['username']        = $data['username'];
          $_SESSION['contact']         = $data['contact'];
          $_SESSION['access']          = $data['access'];
          $_SESSION['loges_as']        = "Admin";


          $user_id    = $data['ID'];
          // user_logs($conn,$user_id,"You Loged In!");

          redirect("../admin/index.php?status=0");
        }else
        {
          // user is blocked so send a error msg
          redirect("../admin/login.php?status=3");
        }

      }else
      {
        // password not match so send user a error msg..
        redirect("../admin/login.php?status=2");
      }
    }else
    {
      // echo "user not found";
      redirect("../admin/login.php?status=1");
    }

  }else
  {
    // echo "Server Not responding";
    redirect("../admin/login.php?status=0");

  }

}

?>
