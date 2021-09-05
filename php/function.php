<?php
//redirect function
function redirect($url)
{
echo "<script>window.location.href = '$url';</script>";
}

//function print array
function prr($array)
{
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}

//function safe string
function safe_val($conn,$string)
{
  $data = mysqli_real_escape_string($conn,$string);
  return $data;
}

?>
