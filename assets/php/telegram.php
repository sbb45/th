<?php

$name = $_POST['name'];
$city = $_POST['city'];
$year = $_POST['year'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$phone = $_POST['phone'];
$token = "7612313805:AAGJqqCO2ivQRnRpnVMQ-o9z8no7uJN6vjE";
$chat_id = "-1002375392172";
$dateTime = new DateTime();
$arr = array(
    'Новая заявка'=>$dateTime->format('d.m.Y H:i'),
    'Имя клиента: ' => $name,
    'Город: ' => $city,
    'Телефон: ' => $phone,
    'Марка авто: ' => $marka,
    'Модель авто:' => $model,
    'Год выпуска: ' => $year,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header("Location: success.html");
  exit();
} else {
  header("Location: error.html");
  exit();
}
?>