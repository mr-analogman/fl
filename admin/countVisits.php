<?php
include('dbconnect.php');

$vistiorIP = $_SERVER['REMOTE_ADDR'];
$visitDate = date("Y-m-d");

$sqlRequest = "SELECT `id` FROM `bankrotVisits` WHERE `date` = '$visitDate'";

$result_query = $mysqli->query($sqlRequest) or die ("Проблема при подключении к БД");

if ($result_query->num_rows == 0) {

  $mysqli->query("DELETE FROM `IPs`") or die ("Проблема при подключении к БД");
  $sqlRequest = "INSERT INTO `IPs`(`ipAddr`) VALUES ('$vistiorIP')";
  $mysqli->query($sqlRequest) or die ("Проблема при подключении к БД");

  $mysqli->query("INSERT INTO `bankrotVisits` (`date`, `hosts`, `views`) VALUES ('$visitDate', 1, 1)") or die ("Проблема при подключении к БД");

} else {

  $currentIP = $mysqli->query("SELECT `id` FROM `IPs` WHERE `ipAddr` = '$vistiorIP'");

  if ($currentIP->num_rows == 1) {

    $mysqli->query("UPDATE `bankrotVisits` SET `views`=`views`+1 WHERE `date` = '$visitDate'");

  } else {

    $mysqli->query("INSERT INTO `IPs` (`ipAddr`) VALUES ('$vistiorIP')");
    $mysqli->query("UPDATE `bankrotVisits` SET `hosts`=`hosts`+1,`views`=`views`+1 WHERE `date`='$visitDate'");

  }

}

?>
