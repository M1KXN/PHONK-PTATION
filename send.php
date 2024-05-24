<?php

    // Получаем данные

    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_nick = $_POST["user_nick"];

    // Обрабатываем получаемые данные

    $user_email = htmlspecialchars($user_email); // Приводим к требуемому виду
    $user_name = htmlspecialchars($user_name);
    $user_nick = htmlspecialchars($user_nick);

    $user_email = urldecode($user_email); // Декодируем URL-ссылки
    $user_name = urldecode($user_name);
    $user_nick = urldecode($user_nick);

    $user_email = trim($user_email); // Обрезаем лишние пробелы
    $user_name = trim($user_name);
    $user_nick = trim($user_nick);

    // Отправляем письмо

    if (mail("phonkpreventation@mail.ru", "Заявка с сайта", "Имя: " . $user_name . "\nE-mail: " . $user_email . "\nСообщение: " . $message, "From: phonkpreventation@mail.ru \r\n")) {
        echo("Письмо успешно отправлено!");
    }
    else {
        echo("Есть ошибки! Проверьте данные!");
    }

?>