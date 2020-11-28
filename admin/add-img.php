<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="..\source\favicon\favicon_bankrot.png" type="image/png">
    <link rel="stylesheet" href="admin-style.css">
    <title>Банкротство физических лиц в Волгограде</title>
  </head>
  <body>
    <a class="logoutForm" id="buttonLogout" href="form-admin.php">Назад</a>
    <?php
    session_start();
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo ($_SESSION['message']);
      unset($_SESSION['message']);
    }
    ?>
    <form class="uploadForm" method="POST" action="upload.php" enctype="multipart/form-data">
      <div>
        <span>Загрузить картинку:</span>
        <input type="file" name="uploadedFile" />
      </div>
      <div style="width: 100%;" class="">
        <p style="font-size: 15px;font-weight: 400;margin: 10px 0;">Первая секция текст</p>
        <input style="width: 100%;" type="text" name="firstText" value="" />
      </div>
      <div style="width: 100%;" class="">
        <p style="font-size: 15px;font-weight: 400;color: rgb(63, 85, 174);margin: 10px 0;">Вторая секция текст</p>
        <input style="width: 100%;" type="text" name="secondText" value="" />
      </div>
      <div style="width: 100%;" class="">
        <p style="font-size: 13px;font-weight: 100;margin: 10px 0;">Третья секция текст</p>
        <input style="width: 100%;" type="text" name="text" value="" />
      </div>

      <input style="margin-top: 10px 0;" type="submit" name="uploadBtn" value="upload" />
    </form>
  </body>
</html>
