<?php
$message = 'Size: '.$_POST['tsize'].PHP_EOL.$_POST['model'].PHP_EOL.$_POST['articul'].PHP_EOL.$_POST['price'].PHP_EOL.'Email: '.$_POST['email'].PHP_EOL.'Phone: '.$_POST['phone'];
$check = $_POST['model'].PHP_EOL.$_POST['articul'].PHP_EOL.'Спасибо за покупку!'.PHP_EOL.'Email для доп вопросов thisworld.help@gmil.com';
mail('thisworld.help@gmail.com', 'Заявка с сайта', $message);
mail($_POST['email'], 'Заявка на покупку товара '.$_POST['model'].' на рассмотрении ', $check);
?>