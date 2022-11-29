<meta http-equiv='refresh'>
<meta charset="UTF-8" />
<?php
$tema="Новая книга!";

error_reporting( E_ERROR ); 
	
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['avtor']))		{$avtor		= $_POST['avtor'];		if ($avtor == '')	{unset($avtor);}}
if (isset($_POST['god']))			{$god			= $_POST['god'];		if ($god == '')	{unset($god);}}
if (isset($_POST['message']))			{$message			= $_POST['message'];		if ($message == '')		{unset($message);}}
if (isset($_POST['person']))			{$person			= $_POST['person'];		if ($person == '')		{unset($person);}}

if (isset($_POST['file']))			{$file			= $_POST['file'];		if ($file == '')		{unset($file);}}



// адрес почты
$address="moodbok@gmail.com";
// формируем письмо
$note_text=" Тема $tema \r\n Название : $name \r\n Автор : $avtor \r\n Год : $god  \r\n Отзыв : $message \r\n Инициалы : $person";

   $send= mail($address,$tema,$note_text,"Content-type:text/plain; windows-1251");
  
   
    
if ($send == 'true') {
   echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/form__style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&family=Exo+2:wght@100;200&family=Raleway:wght@500;700;900&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title>Modbook</title>
</head>
<body>
  <!-- header -->
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="../assets/image/logo/logo1.png" alt="">
                </div>
    
                <nav class="nav" id="nav">
                    <a class="nav__link" href="../index.html" data-scroll="">Главная</a>
                    <a class="nav__link" href="../index/vse__book.html" data-scroll="#">Книги</a>
                    <a class="nav__link" href="#" data-scroll="#">О нас</a>
                    <a class="nav__link" href="#" data-scroll="#">Предложить свою книгу</a>
                </nav>
                
                <button class="nav-toggle" id="nav_toggle" type="button">
                    <span class="nav-toggle__item"></span>
                </button>
            </div>
        </div>
    </header>
    
    
<div class="page">
        
        <div class="wriper">
            <div class="container">
                <div class="form">
     
                       <form method="post" action=".\..\php\form.php" id="form" class="form__body">
                        <div class="form__bg">
                            <h1 class="form__title" id="top" data-aos="fade-up" data-aos-delay="100"  data-aos-duration="2000">Расскажите нам о книге </h1>
                                <div class="form__street">
                                    <div class="form__inner" data-aos="flip-up" data-aos-delay="100"  data-aos-duration="2000">  
                                    <div class="form__item">
                                        <input type="text" name="name" id="formName" class="form__input" placeholder="Название книги...*">
                                    </div>

                                    <div class="form__item">
                                        <input type="text" name="god" id="formName" class="form__input" placeholder="Год выпуска...*">
                                    </div>

                                    <div class="form__item">
                                        <input type="text" name="avtor" id="formName" class="form__input" placeholder="Автор...*">
                                    </div>

                                    <div class="form__item">
                                        <textarea name="message" id="formMessage" class="form__textarea" placeholder="Отзыв..."></textarea>
                                    </div>

                                    <div class="form__item">
                                        <input type="text" name="person" id="formName" class="form__input" placeholder=" Инициалы...*">
                                    </div>
                                
                              
                                
                                <div class="form__item">
                                    <div class="checkbox">
                                        <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input  _req">
                                        <label for="formAgreement" class="checkbox__label"><span>Я даю свое согласие на обработку персональных данных в соответствии с <a class="license__btn" href="#">условием</a></span></label>
                                    </div>
                                    </div>

                                    <div class="form__btn">
                                        <button type="submit" class="form__button">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>

    
    <div class="vse _sending">
        <div class="vse__inner _sending">
            <div class="vse__text">
                <p>Благодарим вас за предложенное произведение!</p>
            </div>
            <div class="vse__flex">
                <div class="vse__button">
                    <div class="block">
                        <a href="../index.html" class="form__go__back obch--form__btn">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     
        <div class="footer">
            <div class="container">
                <div class="footer__flex">
                    <div class="footer__inner">
                        <div class="footer__text">Все права защищены MoodBook</div>
                        <div class="footer__text">Контакты: <a>MoodBooK@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="license__inner">
            <div class="license__head">
                <button class="license__btn__2">X</button>
            </div>
            <div class="license__text">
                
                <p><strong>Пользовательское Соглашение</strong><br>
                    Настоящее Пользовательское Соглашение регулирует отношения между владельцем MoodBook с одной стороны и пользователем сайта с другой.
                    Сайт MoodBook не является средством массовой информации.<br>
                    </p>
                    <p>
                    Используя сайт, Вы соглашаетесь с условиями данного соглашения.
                    Если Вы не согласны с условиями данного соглашения, не используйте сайт MoodBook!<br>
                    </p>
                    <p>
                    <strong>Предмет соглашения<br></strong>
                    Администрация предоставляет пользователю право на размещение на сайте следующей информации:<br>
                    - Текстовой информации<br>
                    - Изображений<br>
                    </p>
                    <p>
                    <strong>Права и обязанности сторон</strong><br>
                    Пользователь имеет право:<br>
                    - осуществлять поиск информации на сайте<br>
                    - получать информацию на сайте<br>
                    - использовать информацию сайта в личных некоммерческих целях<br>
                    </p>
                    <p>
                    <strong>Администрация имеет право:</strong><br>
                    - по своему усмотрению и необходимости создавать, изменять, отменять правила<br>
                    - ограничивать доступ к любой информации на сайте<br>
                    - создавать, изменять, удалять информацию<br>
                    </p>
                    <p>
                    <strong>Пользователь обязуется:</strong><br>
                    - обеспечить достоверность предоставляемой информации<br>
                    - при копировании информации с других источников, включать в её состав информацию об авторе<br>
                    - не распространять информацию, которая направлена на пропаганду войны, разжигание национальной, расовой или религиозной ненависти и вражды, а также иной информации, за распространение которой предусмотрена уголовная или административная ответственность<br>
                    - не нарушать работоспособность сайта<br>
                    - не совершать действия, направленные на введение других Пользователей в заблуждение<br>
                    - не использовать скрипты (программы) для автоматизированного сбора информации и/или взаимодействия с Сайтом и его Сервисами<br>
                    </p>
                    <p>
                    <strong>Администрация обязуется:</strong><br>
                    - поддерживать работоспособность сайта за исключением случаев, когда это невозможно по независящим от Администрации причинам.<br>
                    </p>

                    <p>
                    <strong>Ответственность сторон</strong><br>
                    - пользователь лично несет полную ответственность за распространяемую им информацию<br>
                    - администрация не несет никакой ответственности за достоверность информации, скопированной из других источников<br>
                    - в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность информации, размещённой Пользователем, а также бесперебойную работу информационного ресурса<br>
                    </p>

                    <p>
                    <strong>Условия действия Соглашения</strong><br>
                    Данное Соглашение вступает в силу при любом использовании данного сайта.
                    Соглашение перестает действовать при появлении его новой версии.
                    Администрация оставляет за собой право в одностороннем порядке изменять данное соглашение по своему усмотрению.
                    При изменении соглашения, в некоторых случаях, администрация может оповестить пользователей удобным для нее способом.</p>
            </div>
        </div>
       
</div>
    <script src="../js/aos.js"></script>
    <script src="../js//index.js"></script>
    <script src="../js//form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/boorger.js"></script>

</body>

</html>';
  
}

else {echo "Ой, что-то пошло не так";}


 
      
?>