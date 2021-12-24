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





//     $to = "anna.syniachova@muk.ua";
// $to2 = "sinyachevaal@gmail.com ";
$to2 = "inna.zozylya.iz@gmail.com";
// $subject = "Письмо сообщения muk.ua/marketing/ibm_flashsystem/";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: <webhelp>\r\n";

$message .= $registration."<br>\n";
$message .= $info."<br>\n";
$message .= "Ім'я: ".$name."<br>\n";
$message .= "Прізвище: ".$s_name."<br>\n";
$message .= "Компанія: ".$company."<br>\n";
$message .= "Посада: ".$workers."<br>\n";
$message .= "Email: ".$email."<br>\n";
$message .= "Телефон: ".$phone."<br>\n";
$message .= "Ваше запитання: ".$question."<br>\n";


$send = mail($to, $subject, $message, $headers);
$send = mail($to2, $subject, $message, $headers);

if ($send == "true")
{
  echo "Дякуємо за заповнения форми.";
}
else {
  echo "Виникла помилка, спробуйте ще раз";
}