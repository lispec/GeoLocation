<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

require_once('geoPlugin.php');

$geoplugin = new geoPlugin();

//locate the IP
$geoplugin->locate();

// Вывод результатов
echo "Geolocation results for {$geoplugin->ip}: <br />\n".
    "Страна: {$geoplugin->countryName} <br />\n".
    "Код страны: {$geoplugin->countryCode} <br />\n".
    "Область: {$geoplugin->region} <br />\n".
    "Город: {$geoplugin->city} <br />\n".
    "Долгота: {$geoplugin->longitude} <br />\n".
    "Широта: {$geoplugin->latitude} <br />\n".
    "Символ Валюты: {$geoplugin->currencySymbol} <br />\n".

</body>
</html>