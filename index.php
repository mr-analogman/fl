<?php
include('admin/dbconnect.php');
include('admin/countVisits.php');
session_start();
$sqlRequest = "SELECT * FROM `bankrotFirstSectionImages`";
$result_query = $mysqli->query($sqlRequest);

$imgTxt = array();
for ($i=0; $i < $result_query->num_rows; $i++) {
  $result_query->data_seek($i);
  $imgTxt[$i] = $result_query->fetch_object();
}
$mysqli->close();
$rand = rand(0, (count($imgTxt)-1));
$theme = $imgTxt[$rand];
$_SESSION["themeId"] = $theme->id;

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Банкротство физических лиц в Волгограде</title>
    <link rel="icon" href="source\favicon\favicon_bankrot.png" type="image/png">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script>

    </script>
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="scripts/jquery.maskedinput.js"></script>
    <script src="scripts/jquery.maskedinput.min.js"></script>
    <script>
        $(document).ready(function(){
            PopUpHide(1);
            PopUpHide(3);
            PopUpHide(4);
            PopUpHide(10);
            $(".headerScrolled").hide();
            $(".popup-mobileMenu").hide();

        });
        
        var menuShowed = false;
        
        function menu(){
            if (menuShowed) {
              $(".popup-mobileMenu").animate({opacity: 0}, 400);
              setTimeout(function(){ $("#popupMenu").hide();}, 400);
            } else {
              $(".popup-mobileMenu").show().animate({opacity: 1}, 400);
            }
            menuShowed = !menuShowed;
            console.log(menuShowed);
        }
        
        function PopUpShow(a){
            if (a == 1) {
              $("#popup1").show().animate({opacity: 1}, 200);
            } else if (a == 2) {
              $("#popupEmailed").show().animate({opacity: 1}, 200);
            } else if (a == 3) {
              $("#test").show().animate({opacity: 1}, 200);
            } else if (a == 4) {
              $("#popup4").show().animate({opacity: 1}, 200);
            } else if (a == 5) {
              $("#popup-select-1").show().animate({opacity: 1}, 200);
            } else if (a == 6) {
              $("#popup-select-2").show().animate({opacity: 1}, 200);
            } else if (a == 10) {
              $("#popup10").show().animate({opacity: 1}, 200);
            }


        }
        function PopUpHide(a){
            if (a == 1) {
              $("#popup1").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#popup1").hide();}, 100);
            } else if (a == 2) {
              $("#popupEmailed").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#popupEmailed").hide();}, 100);
            } else if (a == 3) {
              $("#test").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#test").hide();}, 100);
            } else if (a == 4) {
              $("#popup4").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#popup4").hide();}, 100);
            } else if (a == 5) {
              $("#popup-select-1").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#popup-select-1").hide();}, 100);
            } else if (a == 6) {
              $("#popup-select-2").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#popup-select-2").hide();}, 100);
            } else if (a == 10) {
              $("#popup10").animate({opacity: 0}, 100);
              setTimeout(function(){ $("#popup10").hide();}, 100);
            }
        }

        function SelectList1(a) {
          var items = $('.select-item-1');
          for (var i = 0; i < items.length; i++) {
            console.log(items[i].style.height);
          }
          if (a == 0) {
            $('#popupField1').val(items[a].innerHTML);
            for (var i = 0; i < 3; i++) {
              if (i == a) {
                items[i].style.color = "gray";
              } else {
                items[i].style.color = "black";
              }
            }
            PopUpHide(5);
          } else if (a == 1) {
            $('#popupField1').val(items[a].innerHTML);
            for (var i = 0; i < 3; i++) {
              if (i == a) {
                items[i].style.color = "gray";
              } else {
                items[i].style.color = "black";
              }
            }
            PopUpHide(5);
          } else if (a == 2) {
            $('#popupField1').val(items[a].innerHTML);
            for (var i = 0; i < 3; i++) {
              if (i == a) {
                items[i].style.color = "gray";
              } else {
                items[i].style.color = "black";
              }
            }
            PopUpHide(5);
          }
        }

        function SelectList2(a) {
          var items = $('.select-item-2');
          if (a == 0) {
            $('#popupField2').val(items[a].innerHTML);
            for (var i = 0; i < 3; i++) {
              if (i == a) {
                items[i].style.color = "gray";
              } else {
                items[i].style.color = "black";
              }
            }
            PopUpHide(6);
          } else if (a == 1) {
            $('#popupField2').val(items[a].innerHTML);
            for (var i = 0; i < 3; i++) {
              if (i == a) {
                items[i].style.color = "gray";
              } else {
                items[i].style.color = "black";
              }
            }
            PopUpHide(6);
          } else if (a == 2) {
            $('#popupField2').val(items[a].innerHTML);
            for (var i = 0; i < 3; i++) {
              if (i == a) {
                items[i].style.color = "gray";
              } else {
                items[i].style.color = "black";
              }
            }
            PopUpHide(6);
          }
        }
    </script>
    <meta name="description" content="Банкротство физических лиц в Волгограде позволяет списать долг граждан по кредиту от 300 тысяч рублей. Признание гражданина банкротом уже через 2 месяца освобождает от звонков кредиторов, банков, коллекторов. Законно процедуру банкротства проводит только арбитражный управляющий. Запишитесь на бесплатную консультацию и узнайте подходит ли Вам процедура банкротства.">

    <link rel="stylesheet" href="styles/style.css">

    <style media="screen" type="text/css">
      #section2 {
        background-image: url(source/images/firstSection/<?php echo $theme->images ?>);
        background-position: center;
        background-size: cover;
        height: calc(100vh - 60px);

      }
    </style>

  </head>
  <body onpagehide="PopUpShow(10)">

    <div class="header">
      <div class="headerMenu">
        <a class="headerLogoHref" href="../fl"><img src="source/images/logo/logo.png" class="headerLogoImg"></a>
        <div class="headerMenuHrefs">
          <a class="headerMenuHref" href="#freeConsult">Бесплатная консультация</a>
          <a class="headerMenuHref" href="#calc">Калькулятор</a>
          <a class="headerMenuHref" href="#zeroPrct">Рассрочка 0%</a>
        </div>
      </div>

      <div class="headerMenu">
        <div class="contact">
          <a class="callHref" id="headCallHref" href="tel:+79023111183">8 (902) 311-11-83</a>
          <p class="headerAddress">ул. 7-й Гвардейской, д.2, офис 236а</p>
        </div>
        <button class="blueButtons" id="orderCallButton" class="contact" type="button" name="orderCallButton" onclick="PopUpShow(1)">Заказать звонок</button>
      </div>
      
      <div class="mobileMenu" onclick="menu()">
          <div class="mobileMenu-line"></div>
          <div class="mobileMenu-line"></div>
          <div class="mobileMenu-line"></div>
      </div>
      <div class="popup-mobileMenu">
        <div class="headerMobileMenuHrefs">
          <a class="headerMenuHref" href="#freeConsult" onclick="menu()">Бесплатная консультация</a>
          <a class="headerMenuHref" href="#calc" onclick="menu()">Калькулятор</a>
          <a class="headerMenuHref" href="#zeroPrct" onclick="menu()">Рассрочка 0%</a>
        </div>
    </div>
    </div>

    <!-- Scrolled Header -->

    <div class="headerScrolled">
      <div class="headerMenu">
        <a class="headerLogoHref" href="../fl"><img src="source/images/logo/logo.png" class="headerLogoImg"></a>
        <div class="headerMenuHrefs">
          <a class="headerMenuHref" href="#freeConsult">Бесплатная консультация</a>
          <a class="headerMenuHref" href="#calc">Калькулятор</a>
          <a class="headerMenuHref" href="#zeroPrct">Рассрочка 0%</a>
        </div>
      </div>

      <div class="headerMenu">
        <div class="contact">
          <a class="callHref" id="headCallHref" href="tel:+79023111183">8 (902) 311-11-83</a>
          <p class="headerAddress">ул. 7-й Гвардейской, д.2, офис 236а</p>
        </div>
        <button class="blueButtons" id="orderCallButton" class="contact" type="button" name="orderCallButton" onclick="PopUpShow(1)">Заказать звонок</button>
      </div>
      <div class="mobileMenu" onclick="menu()">
          <div class="mobileMenu-line"></div>
          <div class="mobileMenu-line"></div>
          <div class="mobileMenu-line"></div>
      </div>
      <div class="popup-mobileMenu">
        <div class="headerMobileMenuHrefs">
          <a class="headerMenuHref" href="#freeConsult" onclick="menu()">Бесплатная консультация</a>
          <a class="headerMenuHref" href="#calc" onclick="menu()">Калькулятор</a>
          <a class="headerMenuHref" href="#zeroPrct" onclick="menu()">Рассрочка 0%</a>
        </div>
    </div>
    </div>
    
    
    <div class="b-popup" id="popup1">
      <a class="close" href="javascript:PopUpHide(1)"></a>
      <div class="b-popup-content">

        <form action="scripts/mail.php" method="post" class="b-popup-content-elements">
          <p class="b-popup-content-elements-font">Напишите номер на который Вам можно перезвонить, мы позвоним в течение 5 минут в будни (или в ближаиший рабочий день)</p>
          <div class="inputSection" id="b-popup-input-section">
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Имя</p>
              <input id="popupField" class="inputTextField" type="text" name="name" value="" required>
            </div>
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Телефон*</p>
              <input id="popupField" class="inputTextFieldPhone" type="text" name="phone" value="" required>
              <!-- this.value=this.value.replace (/\D/, ''); -->
            </div>
          </div>
          <button class="matteBlueButtons" id="waitForCallButton" type="submin" name="waitForCallButton">Жду звонка</button>
          <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
        </form>

      </div>
    </div>

    <div class="b-popup" id="popup10">
      <a class="close" href="javascript:PopUpHide(10)"></a>
      <div class="b-popup-content">

        <form action="scripts/mail.php" method="post" class="b-popup-content-elements">
          <p class="b-popup-content-elements-font">Оставьте заявку и получите скидку 3000 руб!</p>
          <div class="inputSection" id="b-popup-input-section">
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Имя</p>
              <input id="popupField" class="inputTextField" type="text" name="name" value="">
            </div>
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Телефон*</p>
              <input id="popupField" class="inputTextFieldPhone" type="text" required name="phone" value="" onkeyup="">
            </div>
          </div>
          <button class="matteBlueButtons" id="waitForCallButton" type="submin" name="waitForCallButton">Жду звонка</button>
          <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
        </form>

      </div>
    </div>

    <div class="b-popup" id="popup4">
      <a class="close" href="javascript:PopUpHide(4)"></a>
      <div class="b-popup-content1">

        <form action="scripts/mail.php" method="post" class="b-popup-content-elements">
          <p class="b-popup-content-elements-font">Рассчитать стоимость и условия рассрочки</p>
          <div class="inputSection" id="b-popup-input-section">
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Какой размер Вашего долга сейчас?</p>
              <span class="popup-select-input">
                <input id="popupField1" class="inputTextField" type="text" name="debt" value="Менее 300 тыс.руб."  onclick="PopUpShow(5)">
                <div id="popup-select-1" class="popup-select" style="display: none; opacity: 0;">
                  <p class="select-item-1" onclick="SelectList1(0)" style="color: gray;">Менее 300 тыс.руб.</p>
                  <p class="select-item-1" id="select-item-middle" onclick="SelectList1(1)">300-500 тыс.руб.</p>
                  <p class="select-item-1" onclick="SelectList1(2)">Более 500 тыс.руб.</p>
                </div>
              </span>
            </div>
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Ваш ежемесячный доход?</p>
              <span class="popup-select-input">
                <input id="popupField2" class="inputTextField" type="text" name="income" value="Менее 15 тыс.руб." onclick="PopUpShow(6)">
                <div id="popup-select-2" class="popup-select" style="display: none; opacity: 0;">
                  <p class="select-item-2" onclick="SelectList2(0)" style="color: gray;">Менее 15 тыс.руб.</p>
                  <p class="select-item-2" id="select-item-middle" onclick="SelectList2(1)">15 - 50 тыс.руб.</p>
                  <p class="select-item-2" onclick="SelectList2(2)">Более 50 тыс.руб.</p>
                </div>
              </span>
            </div>
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Имя</p>
              <input id="popupField" class="inputTextField" type="text" name="name" required value="">
            </div>
            <div class="inputField">
              <p id="popupP" class="inputTextFieldName">Телефон*</p>
              <input id="popupField" class="inputTextFieldPhone" type="text" required name="phone" value="" onkeyup="">
            </div>
            <div class="inputField">
              <button class="matteBlueButtons" id="waitForCallButton" type="submin" name="monthPaymentButton">Узнать размер платежа и скачать список</button>
              <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
            </div>
          </div>

          </div>

        </form>

      </div>
    </div>


    <div class="b-popup" id="popupEmailed">
      <a class="close" href="javascript:PopUpHide(2)"></a>
      <div class="b-popup-content" id="emailed-content">

        <div class="b-popup-content-elements">
          <p id="emailPopupText" class="b-popup-content-elements-font"><?php
            if (isset($_SESSION["emailed"])) {
              echo $_SESSION["emailed"];
              unset($_SESSION["emailed"]);
            } else {
              echo "nope.";
            }
            ?></p>
        </div>
      </div>
    </div>

    <!-- pop `up` test -->
    <div class="popup-test" id="test">
      <div class="blackFilter" id="test-content">
        <a class="test-close" href="javascript:PopUpHide(3)"></a>

        <form class="test-questions" action="scripts/mail.php" method="post">

          <div class="test-q">
            <p class="test-q-font">Сумма Вашей задолженности?</p>
            <label class="test-radio">
              Меньше 300 тыс. руб.
              <input type="radio" name="sum" value="Меньше 300 тыс. руб." checked>
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              300-500 тыс. руб.
              <input type="radio" name="sum" value="300-500 тыс. руб.">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              500 тыс. - 2 млн. руб.
              <input type="radio" name="sum" value="500 тыс. - 2 млн. руб.">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Более 2 млн. руб.
              <input type="radio" name="sum" value="Более 2 млн. руб.">
              <span class="checkmark"></span>
            </label>
          </div>

          <div class="test-q" style="display: none; opacity: 0;">
            <p class="test-q-font">Ваш трудовой статус</p>

            <label class="test-radio">
              Работаю официально
              <input type="radio" name="job" value="Работаю официально" checked>
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Работаю неофициально
              <input type="radio" name="job" value="Работаю неофициально">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Не работаю
              <input type="radio" name="job" value="Не работаю">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Предприниматель
              <input type="radio" name="job" value="Предприниматель">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Пенсионер
              <input type="radio" name="job" value="Пенсионер">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Другое
              <input type="radio" name="job" value="Другое">
              <span class="checkmark"></span>
            </label>

          </div>

          <div class="test-q" style="display: none; opacity: 0;">
            <p class="test-q-font">Зарегистрированы в Волгограде или области?</p>

            <label class="test-radio">
              Да
              <input type="radio" name="reg" value="Да" checked>
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Нет
              <input type="radio" name="reg" value="Нет">
              <span class="checkmark"></span>
            </label>

          </div>

          <div class="test-q" style="display: none; opacity: 0;">
            <p class="test-q-font">Есть имущество записанное на Вас? (квартира, дом, машина, земля)</p>

            <label class="test-radio">
              Есть
              <input type="radio" name="prop" value="Есть" checked>
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Нет
              <input type="radio" name="prop" value="Нет">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Затрудняюсь ответить
              <input type="radio" name="prop" value="Затрудняюсь ответить">
              <span class="checkmark"></span>
            </label>

          </div>

          <div class="test-q" style="display: none; opacity: 0;">
            <p class="test-q-font">Есть ипотека или автокредит?</p>

            <label class="test-radio">
              Ипотека
              <input type="radio" name="debt" value="Ипотека" checked>
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Автокредит
              <input type="radio" name="debt" value="Автокредит">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Ипотека и автокредит
              <input type="radio" name="debt" value="Ипотека и автокредит">
              <span class="checkmark"></span>
            </label>

            <label class="test-radio">
              Нет
              <input type="radio" name="debt" value="Нет">
              <span class="checkmark"></span>
            </label>

          </div>

          <div class="test-q" style="display: none; opacity: 0;">
            <p class="test-q-font">Ваше имя?</p>
            <div class="test-inputField">
              <input class="test-textField" id="test-name" type="text" name="name" value="" onkeyup="stoppedTyping()">
              <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
            </div>
          </div>

          <div class="test-q" style="display: none; opacity: 0;">
            <p class="test-q-font">По какому номеру Вам удобно получить информацию?</p>
            <div class="test-inputField">
              <input class="test-textField" id="test-phone" type="text" name="phone" required value="" onkeyup="">
              <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
            </div>
            <button id="testSubmitButton" class="test-button" type="submit" name="testSubmitButton">Готово</button>
          </div>

        </form>

        <div class="popup-test-buttons">
          <button id="testBwdButton" class="test-button" type="button" name="testBwdButton" onclick="testBwd()">Назад</button>
          <button id="testFwdButton" class="test-button" type="button" name="testFwdButton" onclick="testFwd()">Далее</button>
        </div>
      </div>
    </div>




    <!-- Main -->
    <div class="mainSection" id="section2">
        <div class="firstBlock">
          <p class="center">Банкротство физических лиц в Волгограде</p>
          <p class="firstSectionText1"><?php echo $theme->firstHeaderText; ?></p>
          <p class="firstSectionText2"><?php echo $theme->secondHeaderText; ?></p>
          <p class="firstSectionText3"><?php echo $theme->text; ?></p>
          <button id="testButton" class="matteBlueButtons" type="button" name="testButton" onclick="PopUpShow(3)">Пройти тест</button>
          <a id="calcPriceButton" type="button" name="calcPriceButton" href="#calc">Рассчитать стоимость списания долга</a>
        </div>
    </div>

    <div class="mainSection" id="section3">
        <div class="whiteFlexibleColumns">
          <div class="whiteFlexibleColumn">
            <div class="textBlockWhiteColumn">
              <p class="mainTextWhiteColumn">с 2015</p>
              <p class="commonTextWhiteColumn">года списываем долги физических лиц</p>
            </div>
          </div>
          <div class="whiteFlexibleColumn">
            <div class="textBlockWhiteColumn">
              <p class="mainTextWhiteColumn">100%</p>
              <p class="commonTextWhiteColumn">дел по списанию долга закончились полным списанием долга</p>
            </div>
          </div>
          <div class="whiteFlexibleColumn">
            <div class="textBlockWhiteColumn">
              <p class="mainTextWhiteColumn">до 20 раз</p>
              <p class="commonTextWhiteColumn">выгоднее списать долги, пени и штрафы, чем платить их</p>
            </div>
          </div>
          <div class="whiteFlexibleColumn">
            <div class="textBlockWhiteColumn">
              <p class="mainTextWhiteColumn">6-12</p>
              <p class="commonTextWhiteColumn">месяцев и долг списан 100%</p>
            </div>
          </div>
        </div>
    </div>

    <div name="calc" class="mainSection" id="section4">
      <div class="blueFilter">
        <p class="section4font" id="section4fontHead">Долги всегда дешевле списать, чем выплачивать!</p>
        <p class="section4font" id="section4fontYellow">Рассчитайте стоимость Вашего банкротства за 1 минуту и получите в подарок инструкцию по общению с коллекторами</p>
        <h3>Проставьте нужные галочки и получите результат</h3>
        <form method="post" action="scripts/mail.php" class="section4checks">

          <label class="section4checkbox">
            Я официально трудоустроен(а)
            <input type="checkbox" name="checkbox1" value="Я официально трудоустроен(а)">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            Есть дети младше 18 лет
            <input type="checkbox" name="checkbox2" value="Есть дети младше 18 лет">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            Состою в браке
            <input type="checkbox" name="checkbox3" value="Состою в браке">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            Получаю пенсию
            <input type="checkbox" name="checkbox4" value="Получаю пенсию">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            У меня единственное жилье
            <input type="checkbox" name="checkbox5" value="У меня единственное жилье">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            Есть в собственности другие помещения
            <input type="checkbox" name="checkbox6" value=" Есть в собственности другие помещения">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            Есть в собственности автомобиль
            <input type="checkbox" name="checkbox7" value="Есть в собственности автомобиль">
            <span class="checkmark"></span>
          </label>

          <label class="section4checkbox">
            Есть ипотека
            <input type="checkbox" name="checkbox8" value="Есть ипотека">
            <span class="checkmark"></span>
          </label>

          <h4>Размер задолженности</h4>

          <label class="section4radio">
            Меньше 300 тыс. руб.
            <input type="radio" name="sum" value="Меньше 300 тыс. руб." checked>
            <span class="checkmark"></span>
          </label>

          <label class="section4radio">
            300-500 тыс. руб.
            <input type="radio" name="sum" value="300-500 тыс. руб.">
            <span class="checkmark"></span>
          </label>

          <label class="section4radio">
            Более 500 тыс. руб.
            <input type="radio" name="sum" value="Более 500 тыс. руб.">
            <span class="checkmark"></span>
          </label>

          <h4>Как удобно получить расчет стоимости</h4>

          <label class="section4radio">
            WhatsApp
            <input type="radio" name="whereto" value="Whatsapp" checked>
            <span class="checkmark"></span>
          </label>

          <label class="section4radio">
            Viber
            <input type="radio" name="whereto" value="Viber">
            <span class="checkmark"></span>
          </label>

          <label class="section4radio">
            SMS
            <input type="radio" name="whereto" value="SMS">
            <span class="checkmark"></span>
          </label>

          <label class="section4radio">
            Голосом
            <input type="radio" name="whereto" value="Голос">
            <span class="checkmark"></span>
          </label>

          <h4>Куда отправить расчет? *</h4>

          <small>Номер телефона</small>
          <input type="text" name="phone" value="" id="main-test-phone" required placeholder="+7(999) 123-45-67" onkeyup="">

          <button class="blueButtons" id="freeConsultYellowButton" type="submit" name="freeConsultYellowButton">Получить рассчет</button>
          <small>Нажимая на кнопку, вы даете согласие на обработку <a href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></small>


        </form>
      </div>
    </div>

    <div name="zeroPrct" class="mainSection" id="section5">
      <p id="fifthSectionText1" >Затягивать с решением проблемы - значит усугубить ситуацию. Не ждите, когда будет еще тяжелее</p>
      <p id="fifthSectionText2" >Нет денег - предлагаем удобные условия оплаты под ваши возможности. Узнайте, сколько будет стоить наша услуга в месяц именно для вас</p>
      <button class="matteBlueButtons" id="monthPaymentButton" type="button" name="monthPaymentButton" onclick="PopUpShow(4)">Рассчитать ежемесячный платеж</button>
    </div>

    <div class="mainSection" id="section6">
      <p class="sixthSectionText1">Гарантию списания долга за 6-10 месяцев мы прописываем в договоре с Вами</p>
      <p class="sixthSectionText2">С Вас спишутся все виды долга - кредиты, займы, долги ЖКХ и прочие даже в самых сложных случаях:</p>
      <div class="sixthSectionDebtTypes">
        <div class="debtType">
          <div class="blueCircle"></div>
          <p class="debtText1">Сумма Вашего кредитного долга слишком велика и Вам не под силу его выплатить</p>
          <p class="debtText2">У Вас нет таких денег, чтобы хватало на жизнь и на выплату долга</p>
        </div>

        <div class="debtType">
          <div class="blueCircle"></div>
          <p class="debtText1">Вам и Вашим близким постоянно звонят коллекторы</p>
          <p class="debtText2">Оказывают постоянное давление и заставляют жить в стрессе</p>
        </div>

        <div class="debtType">
          <div class="blueCircle"></div>
          <p class="debtText1">Вы потеряли работу или у Вас снизился уровень дохода</p>
          <p class="debtText2">Или другая сложная жизненная ситуация, когда нечем платить кредит</p>
        </div>

        <div class="debtType">
          <div class="blueCircle"></div>
          <p class="debtText1">Вы брали кредит на бизнес и не справились с выплатой кредита</p>
          <p class="debtText2">У Вас нет возможности вернуть этот кредит</p>
        </div>

        <div class="debtType">
          <div class="blueCircle"></div>
          <p class="debtText1">Ваше имущество уже арестовали</p>
          <p class="debtText2">Приставы уже наложили арест на Ваше имущество</p>
        </div>

        <div class="debtType">
          <div class="blueCircle"></div>
          <p class="debtText1">Вы пенсионер. Не справляетесь с оплатой кредитов и коммунальных услуг</p>
          <p class="debtText2">Размер пенсии просто не позволяет выплачивать долги</p>
        </div>
      </div>
    </div>

    <div class="mainSection" id="section7">
      <div class="seventhSectionText">
        <p class="seventhSectionText1">Узнали себя?</p>
        <p class="seventhSectionText2">Узнайте, как лучше поступить конкретно в Вашей ситуации.</p>
        <p class="seventhSectionText2">Получите <span style="color: rgb(77, 105, 190); font-weight: 700;">бесплатную</span> консультацию юриста в течение 20 минут!</p>
      </div>
      <button class="blueButtons" id="freeConsultButton" type="button" name="button" onclick="PopUpShow(1)">Получить бесплатную консультацию</button>
    </div>

    <div class="mainSection" id="section8">
      <img class="section8img" src="source/images/eighthSection/12885022_1302.png" alt="">
      <div class="section8content">
        <div class="section8text">
          <p class="section8font" id="section8fontBold">Последствия банкротства физических лиц:</p>
          <ul class="section8list">
            <li class="section8listItem">Вы начинаете жизнь с чистого листа - все долги списаны.</li>
            <li class="section8listItem">Закон освобождает должника от кредитов, штрафов, пеней НАВСЕГДА</li>
            <li class="section8listItem">Ваше единственное жилье и другое необходимое имущество сохраняется!</li>
            <li class="section8listItem">Весь ваш доход тратите на себя!</li>
            <li class="section8listItem">Вам больше не звонят кредиторы, банки и коллекторы</li>
            <li class="section8listItem">Вы сможете выезжать за границу без проблем</li>
            <li class="section8listItem">Вы сможете подать на банкротство в следующий раз только через 5 лет после списания Вашего сегодняшнего долга</li>
            <li class="section8listItem">В последующие 5 лет, если будете брать кредит, Вам необходимо уведомить будущих кредиторов о том, что Вы проходили процедуру банкротства</li>

          </ul>
          <p class="section8font">Теперь Вы знаете о банкротстве всё. Остается решить: начать процесс банкротства сейчас и избавиться от выплат и звонков кредиторов или подождать еще.</p>
          <button class="matteBlueButtons" id="orderCallButton8" type="button" name="orderCallButton8" onclick="PopUpShow(1)">Записаться на списание долга</button>
        </div>
        <p class="section8callText">Или звоните <a style="color: inherit" href="tel: +79023111183">8 (902) 311-11-83</a></p>
      </div>
    </div>

    <div class="mainSection" id="section9">
      <p class="ninthSectionTextBold">Гарантируем, что оплата услуг только после решения суда, когда убедитесь, что Ваш долг спишут!</p>
      <p class="ninthSectionTextSmall">Оставьте заявку и начните списание Вашего долга сейчас, а оплатите потом!</p>
      <button class="matteBlueButtons" id="orderButton" type="button" name="orderButton" onclick="PopUpShow(1)">Оставить заявку на списание долга</button>
      <p class="ninthSectionTextSmall">Или звоните <a href="tel:+79023111183">8 (902) 311-11-83</a></p>
    </div>

    <div class="mainSection" id="section10">
      <p class="section10textHead">Подайте на банкротство первыми, чтобы играть по своим правилам</p>
      <div class="section10content">
        <div class="section10contentText">
          <p class="section10contentFont" id="section10yellowFont">ВАЖНО!</p>
          <p class="section10contentFont" id="section10whiteFontBold">Если кредитор (банк) подаст заявление на Ваше банкротство первым:</p>
          <ol class="section10contentFont" id="section10orderedList">
            <li>Вы не сможете выехать за границу</li>
            <li>Вам грозит судебное преследование</li>
            <li>Приготовьтесь к конфискации имущества</li>
            <li>Возможен арест недвижимости</li>
          </ol>
          <p class="section10contentFont" id="section10whiteFont">Кто первый подает иск тот и выбирает арбитражного управляющего! А от решения управляющего зависит результат Вашего банкротства.</p>
          <button class="blueButtons" id="freeConsultYellowButton" type="button" name="freeConsultYellowButton" onclick="PopUpShow(1)">Получить бесплатную консультацию юриста</button>
          <p class="section10contentFont" id="section10callHref">Или звоните <a id="callHref" href="tel: +79023111183">8 (902) 311-11-83</a></p>
        </div>

        <div class="section10youtube">
          <iframe width="100%" height="315px"  src="https://www.youtube.com/embed/NuAhsZRKQHU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

    </div>

    <div class="mainSection" id="section11">
      <p class="eleventhSectionText" id="eleventhSectionTextBold" >ФАКТ:</p>
      <p class="eleventhSectionText" >Стоимость списания долга <span style="color: rgb(39, 74, 214);" >до 10 раз меньше суммы долга!</span><br> Списываются абсолютно все долги (кредиты, долги по ЖКХ, распискам, налогам).</p>
      <p class="eleventhSectionText" >Если размер ежемесячных платежей по кредитам забирает весь Ваш доход, задумайтесь о банкротстве. Мы берем на себя сохранение Вашего имущества и проведение процедуры банкротства без Вашего участия.</p>
      <p class="eleventhSectionText" ><span style="color: rgb(39, 74, 214);" >Консультация абсолютно бесплатна.</span> Звоните <a href="tel: +79023111183">8 (902) 311-11-83</a> или закажите звонок и мы Вам перезвоним.</p>
      <button class="blueButtons" id="orderCallButton2" type="button" name="orderCallButton" onclick="PopUpShow(1)">Заказать звонок</button>
    </div>

    <div class="mainSection" id="section12">
      <div class="blackFilter" id="section12blackFilter">
        <div class="section12text">
          <p class="section12font" id="section12fontBold" >Не знаете возможно ли в Вашем случае списать все долги? Опишите Вашу ситуацию и получите консультацию <span style="color: rgb(152, 219, 247);">арбитражного управляющего</span></p>
          <p class="section12font">Консультация абсолютно БЕСПЛАТНАЯ и ни к чему не обязывает</p>
        </div>
        <form method="post" action="scripts/mail.php"  class="section12consultField">
          <p class="section12font" id="section12fontWhiteHead">Опишите здесь Вашу ситуацию и узнайте как Вам лучше поступить</p>
          <div class="inputField" id="section12input">
            <textarea class="inputTextField" id="section12textArea" required name="problem" rows="8" cols="80"></textarea>
          </div>
          <div class="inputField">
            <p class="inputTextFieldName">Имя</p>
            <input class="inputTextField" type="text" required name="name" value="">
          </div>
          <div class="inputField">
            <p class="inputTextFieldName">Телефон*</p>
            <input class="inputTextFieldPhone" type="text" name="phone" value="" required onkeyup="">
          </div>
          <button class="matteBlueButtons" id="section12freeConsultButton" type="submit" name="freeConsultButton">Получить БЕСПЛАТНУЮ консультацию</button>
          <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>

        </form>
      </div>
    </div>

    <div class="mainSection" id="section13">
      <div class="section13text" id="section13font">
        <p id="section13font1">«Единственный законный способ списать все долги - признать гражданина (физическое лицо) банкротом».</p>
      </div>
      <p class="section13text" id="section13font2">С 2015 года в России работает закон, позволяющий физическому лицу объявить себя банкротом и избавиться от нарастающего кредитного долга. При сумме долга от 500 000 рублей (включая пени) гражданин обязан подать на банкротство. Если сумма долга меньше - по желанию.<br>Уходя в банкротство вы законно перестаете платить по кредиту.</p>
    </div>

    <div class="mainSection" id="section14">
      <img class="bankrotBook" src="source/images/thirteenthSection/13269895_900.png" alt="">
      <div class="section14getDocs">
        <p class="section14font" id="section14fontBold">ПОЛУЧИТЕ СЕБЕ НА ЭЛ.ПОЧТУ<br>1. Инструкцию по списанию кредитного долга<br>2. Список документов для бранкротства</p>
        <p class="section14font">Укажите корректный адрес электронной почты и телефон, Вам придет ссылка на скачивание</p>
        <form method="post" action="scripts/mail.php" class="inputSection">
          <div class="inputField">
            <p class="inputTextFieldName">Email</p>
            <input class="inputTextField" required type="text" name="email" value="">
          </div>
          <div class="inputField">
            <p class="inputTextFieldName">Телефон*</p>
            <input class="inputTextFieldPhone" type="text" required name="phone" value="" onkeyup="">
          </div>
          <button class="blueButtons" id="downloadDocsButton" type="submit" name="downloadDocsButton">Скачать</button>
          <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
        </form>
      </div>
    </div>

    <div class="mainSection" id="section15">

      <div class="blockPhoneSection">
        <p class="section15font" id="section15fontBold">Защитим от коллекторов</p>
        <p class="section15font">Часто звонят? Угрожают? Поставьте ваш номер телефона в стоп-лист для защиты от коллекторов прямо сейчас</p>
        <form method="post" action="scripts/mail.php" class="blockPhoneInputSection">
          <input id="blockPhoneTextField" type="text" required name="blockPhone" value="" placeholder="Введите телефон" onkeyup="">
          <button id="blockPhoneButton" class="blueButtons" type="submit" name="blockPhoneButton">Поставить телефон в стоп лист</button>
        </form>
        <p class="persDatesFont">Нажимая на кнопку, вы даете согласие на обработку <a id="downloadPersDates" href="source/documents/persDates/258398_policy.pdf" target="_blank">персональных данных</a></p>
        <p class="section15callText" >Или звоните по номеру <a id="section15callHref" href="tel: +79023111183">8(902)311-11-83</a></p>
      </div>

      <img class="blockPhoneImg" src="source/images/fifteenthSection/4509817_1100.jpg" alt="">
    </div>

    <div class="mainSection" id="section16">
      <p class="sixteenthSectionText">Почему можно доверять юристам "Регионального центра банкротств"</p>
      <div class="trustingSection">
        <div class="trustingBlock">
          <div class="matteBlueCircles"></div>
          <div class="trustingText">
            <p class="trustingFont" id="trustingBold">Профессиональные Арбитражные Управляющие</p>
            <p class="trustingFont">Проводить процедуру банкротства могут только арбитражные управляющие!</p>
          </div>
        </div>

        <div class="trustingBlock">
          <div class="matteBlueCircles"></div>
          <div class="trustingText">
            <p class="trustingFont" id="trustingBold">Индивидуальный подход</p>
            <p class="trustingFont">Полностью учитываем все нюансы и Ваши интересы при проведении процедуры. Возможна рассрочка оплаты процедуры банкротства.</p>
          </div>
        </div>

        <div class="trustingBlock">
          <div class="matteBlueCircles"></div>
          <div class="trustingText">
            <p class="trustingFont" id="trustingBold">Самые адекватные цены</p>
            <p class="trustingFont">Процедуру проводит непосредственно арбитражный управляющий. Никаких посредников. Никаких скрытых платежей. Цена зафиксирована в договоре и не меняется.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mainSection" id="section17">
      <p class="seventeenthSectionText" id="seventeenthSectionTextBold">К нам приходят по рекомендации или когда "обожглись" на мошенниках и посредниках, потому что 100% из более чем 300 дел проведены нами успешно + работаем без скрытых платежей</p>
      <p class="seventeenthSectionText" >Наши клиенты списали долгов на сумму более 500 миллионов рублей! <br> Несколько последних дел по банкротству физических лиц.</p>
    </div>

    <div class="mainSection" id="section18">
      <div class="debtNull">
        <img class="debtNullImg" src="source/images/debts/12016332_1920.jpg" alt="Долг списан">
        <p class="debtNullText" id="debtNullTextBold">Долг по кредиту 2 666 000 руб. Списан!</p>
        <p class="debtNullText">Конкретный пример нашей работы. Задолженность гражданина перед банком. Достаточной суммы для погашения долга нет, имущество отсутствует. Решением Арбитражного суда Волгоградской области по делу № А12-523/2018 гражданин признан банкротом и освобожден от требований кредиторов.</p>
        <button class="matteBlueButtons" id="debtNullButton" type="button" name="debtNullButton" onclick="PopUpShow(1)">Записаться на списание долга</button>
      </div>

      <div class="debtNull">
        <img class="debtNullImg" src="source/images/debts/12016568_1920.jpg" alt="Долг списан">
        <p class="debtNullText" id="debtNullTextBold">Долг 4 545 652 руб. Списано!</p>
        <p class="debtNullText">Еще один наш клиент. Имущества нет. Задолженность банку и ФНС России. Ежемесячный доход 8 000 руб. Иных доходов нет. Решением Арбитражного суда Волгоградской области по делу №A12-14622/2018 гражданин признан банкротом. В результате проведения процедуры банкротства долг полностью списан!</p>
        <button class="matteBlueButtons" id="debtNullButton" type="button" name="debtNullButton" onclick="PopUpShow(1)">Записаться на списание долга</button>
      </div>

      <div class="debtNull">
        <img class="debtNullImg" src="source/images/debts/12016671_1920.jpg" alt="Долг списан">
        <p class="debtNullText" id="debtNullTextBold">Долг 1 201 732 рублей. Списан!</p>
        <p class="debtNullText">Гражданин оказался должен банкам больше 6 миллионов рублей по договору поручительства. Решением Арбитражного суда Волгоградской области по делу №А12-19076/2018 гражданин осовобожден от требований кредиторов. Началась спокойная жизнь.</p>
        <button class="matteBlueButtons" id="debtNullButton" type="button" name="debtNullButton" onclick="PopUpShow(1)">Записаться на списание долга</button>
      </div>
    </div>

    <div class="mainSection" id="section19">
      <div class="blackFilter">
        <p class="nineteenthSectionText" id="nineteenthSectionTextBold">Остались вопросы?</p>
        <p class="nineteenthSectionText">Оставьте запрос на обратный звонок, мы перезвоним Вам как можно скорее</p>
        <button class="matteBlueButtons" id="orderCallButton2" type="button" name="orderCallButton2" onclick="PopUpShow(1)">Заказать звонок</button>
        <p class="nineteenthSectionText" id="nineteenthSectionTextCall">Или звоните <a id="callHref" href="tel: +79023111183">8(902)311-11-83</a> </p>
      </div>
    </div>

    <div name="freeConsult" class="mainSection" id="section20">
      <p class="section20textHead">Приглашаем на <span style="color: rgb(63, 85, 174);">БЕСПЛАТНУЮ</span> консультацию к нам в офис в здании арбитражного суда</p>
      <div class="section20content">
        <div class="section20text">
          <p class="section20font" id="section20fontLight">Консультация поможет Вам понять как действовать в Вашей ситуации и не обязывает к дальнейшему сотрудничеству с нами</p>
          <button class="matteBlueButtons" id="orderFreeConsultButton" type="button" name="orderFreeConsultButton" onclick="PopUpShow(1)">Записаться на бесплатную консультацию</button>
          <img class="section20img" src="source/images/twentiethSection/11971012_616.jpg" alt="">
          <p class="section20font"><span style="font-weight: 400;">Адрес:</span> Волгоград, 7-й Гвардейской, д.2, оф.236а здание Арбитражного Суда Волгоградской области</p>
          <p class="section20font" id="section20fontBorder">Ждем Вас: Пн-пт 9.00 - 18.00 ч</p>
          <p class="section20font" id="section20fontBorder"><span style="font-weight: 400;">Телефон:</span> <a style="color: inherit;" href="tel: +79023111183">8 (902) 311-11-83</a></p>
          <p class="section20font" id="section20fontBorder"><span style="font-weight: 400;">Email:</span> <a style="color: inherit;" href="mailto: anykeystroganov@yandex.ru">anykeystroganov@yandex.ru</a></p>
        </div>
        <div id="section20map">
          <iframe src="map/icon_customImage.html" width="100%" height="100%" frameborder="0"></iframe>
        </div>
      </div>
    </div>

    <div class="mainSection" id="footer">
      <div class="footerDiv">
        <img id="footerLogo" src="source/images/logo/logo.png" alt="">
        <p class="footerFont">ОГРН № 1163443080712</p>
      </div>
      <div class="footerDiv">
        <a class="footerFont" id="footerHref" href="#">100% списание всего долга</a>
        <a class="footerFont" id="footerHref" href="#">Без посредников</a>
        <a class="footerFont" id="footerHref" href="#">Рассрочка 0%</a>
        <a class="footerFont" id="footerHref" href="#freeConsult">Бесплатная консультация</a>
      </div>
      <div class="footerDiv">
        <div class="footerContacts">
          <a class="footerFont" href="tel: +79023111183">8(902)311-11-83</a>
          <p class="footerFontSmall">Пн-пт 9.00 - 18.00 ч.</p>
        </div>
        <div class="footerAddress">
          <p class="footerFont"><span style="font-weight: bold;">Адрес</span></p>
          <p class="footerFontSmall">7-й Гвардейской, д.2, оф.236а здание Арбитражного Суда Волгоградской области</p>
        </div>
      </div>
      <div class="footerDiv">
        <p class="footerFont">Присоединяйтесь к нам во ВКонтакте и читайте полезные статьи</p>
        <a class="hrefVK" href="https://vk.com/bezdolgovvlg" target="_blank"></a>
      </div>
    </div>

    <div class="mainSection" id="section21">
      <p id="section2xTextHead">Кто может пройти процедуру банкротства в Волгограде и списать все свои долги?</p>
      <div class="section2xtext">
        <div class="section2xtext1">
          <p class="section2xfont"><span style="font-weight: bold;" >Процедура банкротства</span> - это единственный законный способ гражданина списать все долги.</p>
          <p class="section2xfont">Процедуру банкротства может пройти физическое лицо - гражданин Российской Федерации. Его задолженность перед кредиторами (банками, налоговой и т.д.) должна составлять от 500 тысяч рублей. Не всегда человек точно знает сколько составляет его задолженность на сегодняшний день. Бывает и так, что он считает что задолженность 200 тысяч рублей, а на самом деле в разы больше.</p>
          <p class="section2xfont">Федеральный закон № 154-ФЗ от 29.06.2015 года говорит, что запросить процедуру банкротства могут:</p>
          <ul class="section21ul">
            <li class="section21font">кредиторы физического лица должника</li>
            <li class="section21font">сам должник</li>
          </ul>
          <p class="section2xfont">Закон оговаривает, что физическое лицо обязано обратиться в суд с заявлением о признании несостоятельности, когда долги превысят 500 тысяч рублей и просрочка более 3 месяцев.</p>
        </div>
        <div class="section2xtext1">
          <p class="section2xfont">Процедура банкротства физических лиц проводится, чтобы списать с должника все долги, который он накопил и не в силах выплатить.</p>
          <p class="section2xfont">Если человек исправно выплачивает кредит, но в ближайшем времени не сможет этого делать из-за ряда причин (например потеря работы, инвалидность и т.д.), то он может обратится за проведением процедуры банкротства физ лица. Здесь должно соблюдаться условие - сумма задолженности от всех кредиторов должна быть не менее 500 тыс. рублей и неисполнение обязательств в течение 3 месяцев.</p>
          <p class="section2xfont">"Региональный центр банкротств" в Волгограде это штат профессиональных арбитражных управляющих, провели более 300 дел о банкротстве и 100% из них закончились полным списанием долгов граждан.</p>
          <p class="section2xfont">Мы даем <a id="freeConsultHref" style="color: black;" href="#freeConsult">бесплатные консультации</a>, где Вы можете узнать, подходит ли Вам процедура банкротства физических лиц на сегодняшний день, какова сумма Вашего долга на самом деле. "Региональный центр банкротств" находится в здании Арбитражного суда в Волгограде.</p>
        </div>
      </div>
    </div>

    <div class="mainSection" id="section22">
      <p id="section2xTextHead">Куда обращаться для проведения процедуры банкротства физических лиц?</p>
      <div class="section2xtext">
        <div class="section2xtext1">
          <p class="section2xfont">По закону процедуру банкротства физических лиц не провести без арбитражного управляющего. И лучше позаботиться о выборе арбитражного управляющего заранее. Не все имеют достаточный опыт работы с банкротством физических лиц с положительным решением суда.</p>
          <p class="section2xfont">Сейчас очень много посредников предлагают услуги банкротства, это могут быть юристы, но процедуру банкротства может проводить только арбитражный управляющий!</p>
          <p class="section2xfont">За счет обращения к посредникам люди сильно переплачивают. Стоимость процедуры банкротства становится выше, а результат при этом может быть непредсказуемым.</p>
        </div>
        <div class="section2xtext1">
          <p class="section2xfont">Бывает и так, что гражданин получил на руки решение суда о признании банкротом, а долги при этом не списаны или списаны не полностью.</p>
          <p class="section2xfont">Не рискуйте и обращайтесь напрямую к арбитражным управляющим! "Региональный центр банкротств" это арбитражные управляющие профессионалы, имеющие большой опыт. Поэтому дает гарантию положительного решения вопроса и 100% списания всех Ваших долгов. К тому же вы экономите средства, не переплачивая посредникам.</p>
          <p class="section2xfont">Приходите на <a id="freeConsultHref" style="color: black;" href="#freeConsult">бесплатную консультацию</a> в офис, который располагается в здании Арбитражного суда Волгоградской области.</p>
        </div>
      </div>
    </div>

    <div class="mainSection" id="section23">
      <p id="section23TextHead">Банкротство физических лиц законный способ избавиться от долга</p>
      <div class="section23text">
        <div class="section2xtext1">
          <p class="section2xfont">Люди боятся банкротства потому что мало знают о нем. В интернете много противоречивой информации. Откуда она берется? С появлением закона о банкротстве физических лиц появилось много мошенников, желающих нажиться на горе людей. Да и просто некомпетентных юристов тоже достаточно. Есть случаи, когда неопытные юристы советуют человеку продать свое имущество перед началом процедуры банкротства. Ни в коем случае этого нельзя делать! Это не единственная ошибка из за которой люди попадают в еще более ужасное положение.</p>
        </div>
        <div class="section2xtext1">
          <p class="section2xfont">Будьте аккуратны в выборе юридических компаний. У нас свой арбитражный управляющий, от которого в конечном итоге зависит спишут ли все ваши долги. И мы не проиграли ни одного дела. Ждем вас на бесплатную консультацию в офис 236а в здании Арбитражного суда Волгоградской области. Уже на этапе анализа ваших документов мы будем точно знать сможем ли мы списать все ваши долги и с какими последствиями!</p>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      //test controls
      var questions = $('.test-q');
      var length = questions.length - 1;
      var i = 0;
      
      checkButton();

      function testFwd() {
        document.getElementById('testFwdButton').disabled = true;
        if (i == 4) {
            console.log("pizda5");
          questions[i].animate({opacity: 0}, 100);
          setTimeout(function(){ questions[i].style.opacity = 0;}, 99);
          setTimeout(function(){ questions[i].style.display = "none";}, 100);

          setTimeout(function(){ questions[i+1].style.display = "block";}, 100);
          setTimeout(function(){ questions[i+1].animate({opacity: 1}, 100);}, 99);
          setTimeout(function(){ questions[i+1].style.opacity = 1;}, 199);
          setTimeout(function(){ i++;}, 200);
          setTimeout(function(){ stoppedTyping();}, 250);
        } else if (i < length) {
          questions[i].animate({opacity: 0}, 100);
          setTimeout(function(){ questions[i].style.opacity = 0;}, 99);
          setTimeout(function(){ questions[i].style.display = "none";}, 100);

          setTimeout(function(){ questions[i+1].style.display = "block";}, 100);
          setTimeout(function(){ questions[i+1].animate({opacity: 1}, 100);}, 99);
          setTimeout(function(){ questions[i+1].style.opacity = 1;}, 199);
          setTimeout(function(){ i++;}, 200);
          setTimeout(function(){ checkButton();}, 250);
        }
      }
      
      function checkButton() {
              if (i < length) {
                document.getElementById('testFwdButton').disabled = false;
              } else {
                document.getElementById('testFwdButton').disabled = true;
              }
              if (i > 0) {
                document.getElementById('testBwdButton').disabled = false;
              } else {
                document.getElementById('testBwdButton').disabled = true;
              }
      }

      function testBwd() {
        document.getElementById('testBwdButton').disabled = true;

        if (i > 0) {

          questions[i].animate({opacity: 0}, 100);
          setTimeout(function(){ questions[i].style.opacity = 0;}, 99);
          setTimeout(function(){ questions[i].style.display = "none";}, 100);

          setTimeout(function(){ questions[i-1].style.display = "block";}, 100);
          setTimeout(function(){ questions[i-1].animate({opacity: 1}, 100);}, 99);
          setTimeout(function(){ questions[i-1].style.opacity = 1;}, 199);
          setTimeout(function(){ i--;}, 200);
        }
        setTimeout(function(){ checkButton();}, 250);
      }

    
    
    
    function stoppedTyping(){
        if(document.getElementById('test-name').value.length > 0) {
            document.getElementById('testFwdButton').disabled = false;
            console.log("enabled");
        } else {
            document.getElementById('testFwdButton').disabled = true;
            console.log("disabled");
        }
    }


    </script>

    <script type="text/javascript">
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });
    </script>

    <script type="text/javascript">

    var elem = document.getElementById("emailPopupText").innerHTML;
    var test = "nope.";

    if (elem == test) {
      console.log(elem);
      PopUpHide(2);
    } else {
      console.log("shit");
      PopUpShow(2);
    }

    $(document).scroll(function(){
        var el = $('#section3');
        var top = $(el).offset().top - $(document).scrollTop();
        el = $('.header');
        if (top < 200 && $(".headerScrolled").css('opacity') == 0){
          $(".headerScrolled").show().animate({opacity: 1}, 200);
          console.log("switch to white");
        }
        if (top > 210 && $(".headerScrolled").css('opacity') == 1){
          $(".headerScrolled").animate({opacity: 0}, 200);
          setTimeout(function(){ $(".headerScrolled").hide();}, 200);
          console.log("switch to fix");
        }
      });

    </script>
    <script type="text/javascript">
    $(function(){
    $(".inputTextFieldPhone").mask("+7(999) 999-99-99");
    $("#test-phone").mask("+7(999) 999-99-99");
    $("#main-test-phone").mask("+7(999) 999-99-99");
    $("#blockPhoneTextField").mask("+7(999) 999-99-99");
    });
    </script>
  </body>
</html>
