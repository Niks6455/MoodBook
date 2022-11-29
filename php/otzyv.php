<meta http-equiv='refresh'>
<meta charset="UTF-8" />

<?php

$name_book = $_POST['example_hidden'];
$name = $_POST['name'];
$Message= $_POST['Message'];
$email = $_POST['email'];
$header = "Отзыв о книге";
$my_mail='moodbok@gmail.com';

$mes= "Книга: $name_book \nТекст отзыва: $Message \nИнициалы: $name";
$send = mail($my_mail, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

if ($send == 'true') {
      echo '<meta http-equiv="refresh" content="0; url=./../index.html">';
}

else {echo "Ой, что-то пошло не так";}


?>