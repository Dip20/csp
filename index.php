<?php
session_start();
require_once("php/function.php");
require_once("php/connection.php");

if (isset($_SESSION['is_loged']))
{
  $access = $_SESSION['loges_as'];
  if ($access=="Admin")
  {
    // user is admin so redirect to admin pages.
    redirect("admin/index.php");
  }

}else
{
    // user is not loged in so redirect to index.
    redirect("login.php");
}


if (isset($_GET['li']))
{
  $link = $_GET['li'];
}else
{
  $link = '';
}

function is_active($value='',$link='')
{
  $link_val = base64_decode($link);
  if ($link_val==$value)
  {
    echo "active";
  }else
  {
    // code...
  }
}

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CSP Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <link rel="icon" href="images/shards-dashboards-logo.svg" type="image/svg" sizes="16x16">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="h-100">
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                <span class="d-none d-md-inline ml-1">Dashboard</span>
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
          </div>
        </form>
        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link <?php is_active("Dashboard",$link); ?>" href="index.php?li=<?php echo base64_encode("Dashboard"); ?>">
                <i class="fa fa-tachometer-alt"></i>
                <span> Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("AEPS Login",$link); ?>" href="index.php?li=<?php echo base64_encode("AEPS Login"); ?>">
                <i class="material-icons">vertical_split</i>
                <span>AEPS Login </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  <?php is_active("ESRAM Card",$link); ?>" href="index.php?li=<?php echo base64_encode("ESRAM Card"); ?>">
                <i class="material-icons">note_add</i>
                <span>ESRAM Card</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("INSURANCE",$link); ?>" href="index.php?li=<?php echo base64_encode("INSURANCE"); ?>">
                <i class="material-icons">view_module</i>
                <span>INSURANCE</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("ACCOUNT OPNING",$link); ?>" href="index.php?li=<?php echo base64_encode("ACCOUNT OPNING"); ?>">
                <i class="material-icons">table_chart</i>
                <span>ACCOUNT OPNING</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("DEMAT ACCOUN",$link); ?>" href="index.php?li=<?php echo base64_encode("DEMAT ACCOUN"); ?>">
                <i class="material-icons">person</i>
                <span>DEMAT ACCOUNT</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("REFER & EARN",$link); ?>" href="index.php?li=<?php echo base64_encode("REFER & EARN"); ?>">
                <i class="fas fa-share-square"></i>
                <span>REFER & EARN</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("LOAN",$link); ?>" href="index.php?li=<?php echo base64_encode("LOAN"); ?>">
                <i class="fas fa-wallet"></i>
                <span>LOAN</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("TAX ",$link); ?>" href="index.php?li=<?php echo base64_encode("TAX "); ?>">
                <i class="fas fa-hand-holding-usd"></i>
                <span>TAX</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php is_active("Shopping",$link); ?>" href="index.php?li=<?php echo base64_encode("Shopping"); ?>">
                <i class="fa fa-shopping-cart"></i>
                <span>Shopping</span>
              </a>
            </li>
            <?php
            $sql = mysqli_query($conn,"SELECT * FROM tbl_menu WHERE is_deleted='0' ORDER BY menu_id DESC");

            if($sql)
            {
              if(mysqli_num_rows($sql)>0)
              {

                while ($data=mysqli_fetch_assoc($sql))
                {
                  $get_menu_name = $data['menu_name'];
                  ?>
            <li class="nav-item">
              <a class="nav-link <?php is_active("$get_menu_name",$link); ?>" href="index.php?li=<?php echo base64_encode("$get_menu_name"); ?>">
                <i class="fa fa-angle-double-right"></i>
                <span><?php echo $get_menu_name; ?></span>
              </a>
            </li>
            <?php
                }

              }
            }

            ?>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->
          <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
              <div class="input-group input-group-seamless ml-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
                <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
              </div>
            </form>
            <ul class="navbar-nav border-left flex-row ">
              <li class="nav-item border-right dropdown notifications">
                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="nav-link-icon__wrapper">
                    <i class="material-icons">&#xE7F4;</i>
                    <!-- <span class="badge badge-pill badge-danger">2</span> -->
                  </div>
                </a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle mr-2" src="images/avatars/1.jpg" alt="User Avatar">
                  <span class="d-none d-md-inline-block">User Name</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item" href="#">
                    <i class="material-icons">&#xE7FD;</i> Profile</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="php/logout.php">
                    <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                </div>
              </li>
            </ul>
            <nav class="nav">
              <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
              </a>
            </nav>
          </nav>
        </div>
        <!-- / .main-navbar -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">

              <h3 class="page-title"><?php echo base64_decode($link); ?> </h3>
            </div>
          </div>
          <!-- End Page Header -->

          <div class="row justify-content-center">
            <!-- Top Referrals Component -->
              <?php
              $link_decoded =base64_decode($link);

              if ($link_decoded=="Shopping")
              {

                require_once("store.php");

              }elseif($link_decoded=='')
              {
                ?>
                <h5 class="text-left">Welcome,  <?php echo $_SESSION['username']; ?>. Please Select A Menu from Left Sidebar. &nbsp;
                  <a class="btn btn-outline-primary" href="index.php?li=<?php echo base64_encode("dashboard"); ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
                </h5>
                <br>
                <img src="images/hero_img.svg" alt="Hero Image" class="img-fluid" width="50%" height="50%">

                <?php
              }elseif($link_decoded!=='')
              {
                  ?>
                  <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                    <div class="card card-small">
                      <div class="card-header border-bottom">
                        <h6 class="m-0">Top Links</h6>
                      </div>
                      <div class="card-body p-0">
                        <ul class="list-group list-group-small list-group-flush">

                          <?php


                          $sql = mysqli_query($conn,"SELECT * FROM tbl_links WHERE link_tab='$link_decoded' AND is_deleted='0' ORDER BY link_id DESC");

                          if($sql)
                          {

                            if(mysqli_num_rows($sql)>0)
                            {
                              while ($data=mysqli_fetch_assoc($sql))
                              {

                          ?>

                          <li class="list-group-item d-flex px-3">
                            <span class="text-semibold text-fiord-blue"><?php echo $data['link_title']; ?></span>
                            <span class="ml-auto text-right text-semibold text-reagent-gray"> <a href="<?php echo $data['link']; ?>" target="_blank">Click Here</a></span>
                          </li>

                            <?php
                                }
                              }else
                              {
                                echo '<p class="text-danger text-center mt-3">No data Found</p>';
                              }

                            }else
                            {
                              echo "Server Not responding";
                            }
                            ?>

                        </ul>
                      </div>
                    </div>
                  </div>

                  <?php
              }


              ?>
            <!-- End Top Referrals Component -->

          </div>
        </div>
        <footer class="main-footer d-flex p-2 px-3 bg-white border-top ">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <span class="copyright ml-auto my-auto mr-2">
            Copyright &copy; 2021 all rights Reserved
            <a href="mailto:info.dip.sarkar@gmail.com?subject=feedback">Dip sarkar</a>
          </span>
        </footer>
      </main>
    </div>
  </div>

  <!-- Notification alert -->
  <?php
    $URL = "index.php";
     if (isset($_GET['status']))
     {
       if ($_GET['status']=="0")
         {
           echo '<script>swal("Successfully Loged in!", "You can select Menu From Left Sidebar", "success");</script>';
         }
     }

     ?>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
  <script src="scripts/extras.1.1.0.min.js"></script>
  <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
  <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
</body>

</html>
