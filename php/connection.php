<?php
   date_default_timezone_set("Asia/kolkata");//set asia time
   // error_reporting(0);

   // $servername="127.0.0.2";
   // $username="dipsarka_DB";
   // $password="B7fvX3XdY";
   // $database="dipsarka_DB";

   $servername="localhost";
   $username="root";
   $password="";
   $database="csp";

   $conn=new mysqli($servername,$username,$password,$database);

   if ($conn->connect_error)
   {
     echo'<h4 style="color:red; text-align:center;">connect Error: ' . $conn->connect_error . '</h4>';
   }
   else {
   //  echo "connected";

   }
   ?>
