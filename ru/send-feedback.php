<?php
$name = $_POST['first-name'];
$s_name = $_POST['last-name'];
$company = $_POST['company'];
$workers = $_POST['role'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$question = $_POST["question"];
$registration = $_POST["registration"];
$info = $_POST["info"];





// $to = "Sinyachevaal@gmail.com";
// $to2 = "anna.syniachova@muk.ua";
$to2 = "inna.zozylya.iz@gmail.com";
// $subject = "Письмо сообщения muk.ua/marketing/ibm_flashsystem/ru/";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: <info@webdeveloper.com.ua>\r\n";

$message .= $registration."<br>\n";
$message .= $info."<br>\n";
$message .= "имя: ".$name."<br>\n";
$message .= "Фамилия: ".$s_name."<br>\n";
$message .= "Компания: ".$company."<br>\n";
$message .= "Должность: ".$workers."<br>\n";
$message .= "Email: ".$email."<br>\n";
$message .= "Телефон: ".$phone."<br>\n";
$message .= "Ваш вопрос: ".$question."<br>\n";


$send = mail($to, $subject, $message, $headers);
$send = mail($to2, $subject, $message, $headers);

if ($send == "true")
{
  echo "Спасибо за заполненную форму!";
}
else {
  echo "Произошла ошибка, попробуйте еще раз";
}