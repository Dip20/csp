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
// select user role..
function user_role($role='')
{

  // admin
   // super distributor
   // distributor
   // retailer
   // agent

  switch ($role)
  {
    case 'admin':

    echo '<option value="super distributor">super distributor</option>
        <option value="distributor">distributor</option>
        <option value="retailer">retailer</option>
        <option value="agent">agent</option>';
    break;

    case 'super distributor':

    echo '<option value="distributor">distributor</option>
        <option value="retailer">retailer</option>
        <option value="agent">agent</option>';
    break;

    case 'distributor':

    echo '<option value="retailer">retailer</option>
        <option value="agent">agent</option>';
    break;

    case 'retailer':
    echo '<option value="agent">agent</option>';
    break;

    case 'agent':
    echo '<option value="">-- No Permission --</option>';

      break;

    default:

    break;
  }
}



?>
