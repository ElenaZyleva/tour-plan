<?php
session_start();

// Файлы phpmailer
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';
require 'phpMailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$newsletterEmail = $_POST['newsletterEmail'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Новое обращение Best Tour Plan";

if ((isset($newsletterEmail) & !empty($newsletterEmail))) {
    $body = "
    <h2>Новое обращение</h2>
    <b>Email для рассылки: </b>$newsletterEmail<br>    
    ";
} else {
    if ((isset($email) & !empty($email))) {
        $body = "
        <b>Имя:</b>$name<br>
        <b>Телефон:</b> $phone<br><br>
        <b>Email:</b> $email<br><br>
        <b>Сообщение:</b><br>$message
        ";
    } else {
        $body = "
        <h2>Новое обращение</h2>
        <b>Имя:</b>$name<br>
        <b>Телефон:</b> $phone<br><br>
        <b>Сообщение:</b><br>$message
        ";
    }
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'alenka.zyleva@yandex.ru'; // Логин на почте
    $mail->Password   = 'ckynwhigpucdiuve'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('alenka.zyleva@yandex.ru', 'Елена Зылева'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('solnyshka_z@mail.ru'); 

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
if ((isset($newsletterEmail) & empty($newsletterEmail))) {
    $text = "Our manager will call you within 7 minutes.";
} else {
    $text = "Thank you for signing up";
}
$_SESSION['text'] = $text;
header('Location: thankyou.php');
die();
?>