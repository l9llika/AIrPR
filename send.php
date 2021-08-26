

<?php
	ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Сообщение
$message = "Line 1\r\nLine 2\r\nLine 3";

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
mail('info@airpr.ru', 'My Subject', $message);
	

?>