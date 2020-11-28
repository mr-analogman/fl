<?php
include('dbconnect.php');
if ((isset($_COOKIE["AdminLogged"])) && ($_COOKIE["AdminLogged"] == 1)) {
  $sqlRequest = "SELECT * FROM `bankrotFirstSectionImages`";
  $result_query = $mysqli->query($sqlRequest);

  $imgTxt = array();
  for ($i=0; $i < $result_query->num_rows; $i++) {
    $result_query->data_seek($i);
    $imgTxt[$i] = $result_query->fetch_object();
  }
  //$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="..\source\favicon\favicon_bankrot.png" type="image/png">
    <link rel="stylesheet" href="admin-style.css">
    <title>Банкротство физических лиц в Волгограде</title>
  </head>
  <body>
    <form class="logoutForm" action="logout.php" method="post">
      <button type="submit" id="buttonLogout">Выйти</button>
      <input type="hidden" name="logout" value="1">
    </form>
    <div class="adminSection" id="changeImgText">
      <a id="blueHrefs" href="add-img.php">Добавить</a>
      <div class="ImgTexts">
        <?php
        for ($i=0; $i < count($imgTxt); $i++) {
          // ${imgTxt->images}"
        ?>

        <div class="imgText">
          <img class="img" src="../source/images/firstSection/<?php echo $imgTxt[$i]->images;?>" alt="">
          <p class="firstText"><?php echo $imgTxt[$i]->firstHeaderText; ?></p>
          <p class="secondText"><?php echo $imgTxt[$i]->secondHeaderText; ?></p>
          <p class="text"><?php echo $imgTxt[$i]->text; ?></p>
          <p class="text" style="font-weight: 400;"><?php echo "<br>"; $stats = "Отправлено заявок: ".$imgTxt[$i]->stats; echo $stats; ?></p>
          <?php if (count($imgTxt) > 1) {
          ?>

          <form class="deleteImgTxt" action="delete.php" method="post">
            <input type="hidden" name="imgTxtId" value="<?php echo $imgTxt[$i]->id; ?>">
            <button class="deleteImgTxtButton" type="submit" name="deleteImgTxtButton">Удалить</button>
          </form>

          <?php
          }
          ?>
        </div>

        <?php
        }
        ?>
      </div>
    </div>
    <div class="adminSection" id="statistics">
      <div class="adminStats">
        <p class="adminStatsTextHead">Статистика за сегодня</p>
        <?php
        $today = date("Y-m-d");

        $sqlRequest = "SELECT * FROM `bankrotVisits` WHERE `date`='$today'";
        $todayStatsFetch = $mysqli->query($sqlRequest) or die("suka blyad");


        if ($todayStatsFetch->num_rows == 0) {
          $todayStatsIs = false;
        } else {
          $todayStatsIs = true;
          $todayStats = array();
          for ($i=0; $i < $todayStatsFetch->num_rows; $i++) {
            $todayStatsFetch->data_seek($i);
            $todayStats[$i] = $todayStatsFetch->fetch_object();
          }
        }

        ?>
        <table cellspacing="10">
          <tr>
            <td>Уникальных посетителей</td>
            <td>
            <?php
            if ($todayStatsIs) {
              echo $todayStats[0]->hosts;
            } else {
              echo 0;
            }
            ?>
            </td>
          </tr>
          <tr>
            <td>Просмотров</td>
            <td>
            <?php
            if ($todayStatsIs) {
              echo $todayStats[0]->views;
            } else {
              echo 0;
            }
            ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="adminStats">
        <?php
        if (isset($_GET["fD"]) && $_GET["fD"]!="" && isset($_GET["lD"]) && $_GET["lD"]!="" && isset($_GET["fM"]) && $_GET["fM"]!="" && isset($_GET["lM"]) && $_GET["lM"]!="" && isset($_GET["fY"]) && $_GET["fY"]!="" && isset($_GET["lY"]) && $_GET["lY"]!="") {
          $fDsrc = $_GET["fD"] . "-" . $_GET["fM"] . "-" . $_GET["fY"];
          $fD = new DateTime($fDsrc);
          $lD = date_create($_GET["lD"]."-".$_GET["lM"]."-".$_GET["lY"]);
          $fDstr = $fD->format('Y-m-d');
          $lDstr = $lD->format('Y-m-d');
          $plcHld = true;
          $sqlRequest = "SELECT `date`, `hosts`, `views` FROM `bankrotVisits` WHERE `date` BETWEEN '$fDstr' AND '$lDstr' ORDER BY `date`";
          $stats = $mysqli->query($sqlRequest) or die ("gavno");
        } else {
          $sqlRequest = "SELECT `date`, `hosts`, `views` FROM `bankrotVisits` ORDER BY `date` DESC LIMIT 7";
          $stats = $mysqli->query($sqlRequest) or die ("gavno");
          $plcHld = false;
        }

        $todayStats = array();
        for ($i=0; $i < $stats->num_rows; $i++) {
          $stats->data_seek($i);
          $todayStats[$i] = $stats->fetch_object();
        }

        ?>
        <p>Статистика за выбранный период</p>
        <form class="chooseDate" action="form-admin.php" method="get">
          <p style="margin-right: 5px;">С</p>
          <input class="input2" type="text" name="fD" value="" placeholder="<?php if ($plcHld) {
            echo $_GET["fD"];
          } else {
            echo "dd";
          } ?>" maxlength="2">
          <p>.</p>
          <input class="input2" type="text" name="fM" value="" placeholder="<?php if ($plcHld) {
            echo $_GET["fM"];
          } else {
            echo "mm";
          } ?>" maxlength="2">
          <p>.</p>
          <input class="input4" type="text" name="fY" value="" placeholder="<?php if ($plcHld) {
            echo $_GET["fY"];
          } else {
            echo "yyyy";
          } ?>" maxlength="4">
          <p style="margin: 0 5px;">По</p>
          <input class="input2" type="text" name="lD" value="" placeholder="<?php if ($plcHld) {
            echo $_GET["lD"];
          } else {
            echo "dd";
          } ?>" maxlength="2">
          <p>.</p>
          <input class="input2" type="text" name="lM" value="" placeholder="<?php if ($plcHld) {
            echo $_GET["lM"];
          } else {
            echo "mm";
          } ?>" maxlength="2">
          <p>.</p>
          <input class="input4" type="text" name="lY" value="" placeholder="<?php if ($plcHld) {
            echo $_GET["lY"];
          } else {
            echo "yyyy";
          } ?>" maxlength="4">

          <button type="submit" name="fetchStatsButton">Показать</button>

        </form>
        <table id="statists" cellspacing="10">
          <tr>
            <td>Дата</td>
            <?php
            for ($i=0; $i < count($todayStats); $i++) {
              $date = new DateTime($todayStats[$i]->date);
              echo "<td>";
              echo $date->format('d.m.Y');
              echo "</td>";
            }
            ?>
          </tr>
          <tr>
            <td>Уникальных посетителей</td>
            <?php
            for ($i=0; $i < count($todayStats); $i++) {
              echo "<td>";
              echo $todayStats[$i]->hosts;
              echo "</td>";
            }
            ?>
          </tr>
          <tr>
            <td>Просмотры</td>
            <?php
            for ($i=0; $i < count($todayStats); $i++) {
              echo "<td>";
              echo $todayStats[$i]->views;
              echo "</td>";
            }
            ?>
          </tr>
        </table>
      </div>
    </div>

  </body>
</html>

<?php
} else {
  header("Location: form-login.php");

}
?>
