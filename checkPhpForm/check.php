<?php
    $email_addres = 'delta888081170@mail.ru';

    $Name_Client = htmlspecialchars(trim($_POST['name']));
    $Email_Client = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $err = "";
    if (trim($Name_Client) == "" && trim($Email_Client) == "" && trim($message) == "" && trim($_POST['subject']) == "") $err = "Заполните поля";
    else if (trim($Name_Client) == "") $err = "Имя не указано";
    else if (trim($message) == "") $err = "Сообщение не указано";
    else if (trim($_POST['subject']) == "") $err = "Тема письма не указана";
    else if (trim(!((strpos($Email_Client, ".") > 0) && (strpos($Email_Client, "@") > 0)))) $err = "Неправильный e-mail";

    if ($err != "") echo $err; exit; //Есть ошибки при отправке заявки на почту
    
    $headers = "From: $Email_Client\r\nReply-to: $Email_Client\r\nContent-type: text\html; charset=utf-8\r\n";
    $subject = "=?utf-8?B?".base64_encode($_POST['subject'])."?=";
    
    $success = mail($email_addres, $subject, $headers, $Name_Client, $message);
    echo $success;
?>