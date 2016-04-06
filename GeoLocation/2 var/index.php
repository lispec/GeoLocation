<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;

$reader2 = new Reader('GeoLite2-City.mmdb/GeoLite2-City.mmdb');

$ip = $_SERVER['REMOTE_ADDR'];
//$ip = '195.88.72.125';

try {

    $geo2 = $reader2->city($ip);

} catch (Exception $e) {

    echo 'Поймано исключение: ' . $e->getMessage() . "\n";
    die;

}

echo "<br/><b>Ваш адрес:</b>";
echo "<br/> Страна: " . $geo2->country->name;
echo "<br/> Код страны: " . $geo2->country->isoCode;
echo "<br/> Область: " . $geo2->mostSpecificSubdivision->names['en'];
echo "<br/> Город: " . $geo2->city->name;
echo "<br/> Широта: " . $geo2->location->latitude;
echo "<br/> Долгота: " . $geo2->location->longitude;

?>

</body>
</html>