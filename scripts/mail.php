<?php
include('../admin/dbconnect.php');
session_start();
$message = "";

if (isset($_POST["waitForCallButton"])) {
  $name = $_POST["name"];
  $phone =  $_POST["phone"];
  $subject = "Перезвонить";
  $message = $name . ' ' . $phone;
  $message .= "\r\n";

} else if (isset($_POST["freeConsultYellowButton"])) {
  $subject = "Получить рассчёт стоимости списания долга";
  $message = "";

  $checkbox = [];
  if (isset($_POST["checkbox1"])) {
    $checkbox[] = $_POST["checkbox1"];
  }
  if (isset($_POST["checkbox2"])) {
    $checkbox[] = $_POST["checkbox2"];
  }
  if (isset($_POST["checkbox3"])) {
    $checkbox[] = $_POST["checkbox3"];
  }
  if (isset($_POST["checkbox4"])) {
    $checkbox[] = $_POST["checkbox4"];
  }
  if (isset($_POST["checkbox5"])) {
    $checkbox[] = $_POST["checkbox5"];
  }
  if (isset($_POST["checkbox6"])) {
    $checkbox[] = $_POST["checkbox6"];
  }
  if (isset($_POST["checkbox7"])) {
    $checkbox[] = $_POST["checkbox7"];
  }
  if (isset($_POST["checkbox8"])) {
    $checkbox[] = $_POST["checkbox8"];
  }

  $debtSize = $_POST["sum"];
  $contactWith = $_POST["whereto"];
  $phone =  $_POST["phone"];

  if (count($checkbox) > 0) {
    for ($i=0; $i < count($checkbox); $i++) {
      $message .= $checkbox[$i];
      $message .= "\r\n";
    }
  }
  $message .= "Размер задолженности: ";
  $message .= $debtSize;
  $message .= "\r\n";

  $message .= "Как получить рассчёт стоимости: ";
  $message .= $contactWith;
  $message .= "\r\n";

  $message .= $phone;
  $message .= "\r\n";

} else if (isset($_POST["freeConsultButton"])) {
  $subject = "Получить бесплатную консультацию";

  $name = $_POST["name"];
  $phone =  $_POST["phone"];

  $message = $name . ' ' . $phone;
  $message .= "\r\n";

  $problem = wordwrap($_POST["problem"], 70);
  $message .= $problem;
  $message .= "\r\n";

} else if (isset($_POST["downloadDocsButton"])) {
  $subject = "Получить ссылку на скачивание документов";

  $email = $_POST["email"];
  $phone =  $_POST["phone"];

  $message = $email . ' ' . $phone;
  $message .= "\r\n";

} else if (isset($_POST["blockPhoneButton"])) {
  $subject = "Поставить телефон в стоп-лист";

  $phone =  $_POST["blockPhone"];

  $message .= $phone;
  $message .= "\r\n";

} else if (isset($_POST["testSubmitButton"])) {
  $subject = "Тест";

  $name = $_POST["name"];
  $phone =  $_POST["phone"];

  $debtSize = $_POST["sum"];
  $jobStatus = $_POST["job"];
  $reg = $_POST["reg"];
  $propety = $_POST["prop"];
  $isDebt = $_POST["debt"];

  $message = $name . ' ' . $phone;
  $message .= "\r\n";

  $message .= "Размер задолженности: ";
  $message .= $debtSize;
  $message .= "\r\n";

  $message .= "Трудовой статус: ";
  $message .= $jobStatus;
  $message .= "\r\n";

  $message .= "Зарегистрирован ли в Волгограде или области: ";
  $message .= $reg;
  $message .= "\r\n";

  $message .= "Есть ли записанное имущество: ";
  $message .= $propety;
  $message .= "\r\n";

  $message .= "Есть ли ипотека или автокредит: ";
  $message .= $isDebt;
  $message .= "\r\n";

} else if (isset($_POST["monthPaymentButton"])) {
  $subject = "Рассчитать ежемесячный платёж";

  $name = $_POST["name"];
  $phone =  $_POST["phone"];
  $debtSize = $_POST["debt"];
  $incomePerMonth =  $_POST["income"];

  $message = $name . ' ' . $phone;
  $message .= "\r\n";

  $message .= "Размер задолженности: ";
  $message .= $debtSize;
  $message .= "\r\n";

  $message .= "Ежемесячный доход: ";
  $message .= $incomePerMonth;
  $message .= "\r\n";

}

$message .= "IP: ";
$message .= $_SERVER["REMOTE_ADDR"];


$success = mail("pirat21@list.ru", $subject, $message);
if ($success) {
  $_SESSION["emailed"] = "Ваша заявка была успешно отправлена!";
} else {
  $_SESSION["emailed"] = "Ваша заявка не была отправлена! Повторите попытку позже.";
}

$id = $_SESSION["themeId"];

$mysqli->query("UPDATE `bankrotFirstSectionImages` SET `stats`=`stats`+1 WHERE `id` = '$id'");

$sqlRequest = "SELECT * FROM `bankrotFirstSectionImages`";
$result_query = $mysqli->query($sqlRequest);

$imgTxt = array();
for ($i=0; $i < $result_query->num_rows; $i++) {
  $result_query->data_seek($i);
  $imgTxt[$i] = $result_query->fetch_object();
}

echo $imgTxt[0]->stats;



header("Location: ../index.php");

?>
