<?php
/* Принимаем данные из формы */
$name = $_POST['name']; 
$email = $_POST['email'];
$subj = $_POST['subject'];
$text_message = $_POST['message'];

/* Подключаемся к БД */
$db = mysqli_connect('localhost', 'root','', 'site'); 
 
/* Записываем данные из формы в БД */
$sql = "INSERT INTO bumerang(name, email, message, theme) VALUES ('$name', '$email', '$text_message', '$subj')";
$result=mysqli_query($db, $sql);
header('Location: https://site-main.ru/index.php');
exit;
?>