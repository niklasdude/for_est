<?php
$nickname = $_POST['nickname'];
$message = $_POST['message'];

$mysqli = new mysqli("localhost", "praktikant", "praktikant", "praktikant_01");
if (strlen($nickname) > 30 || strlen($nickname) < 3)
{
	die('Sorry, your nickname has to be between 3 and 16 characters.');
}
if (strlen($message) > 512 || strlen($message) < 2)
{
	die('Sorry, your message has to be between 32 and 512 characters.');
}
if (!$mysqli->query(
		"insert into guestbook (nickname, message) VALUES ('$nickname', '$message')"
		))
{
	die('Sorry, a database error occurred. Your message was not saved.');
}
echo 'Your message was successfully added.';

header('Location: http://praktikant.dev/book.php');
