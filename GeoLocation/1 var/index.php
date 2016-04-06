<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

require_once("ipgeobase.php");

$gb = new IPGeoBase();
$ip = $_SERVER['REMOTE_ADDR'];
$data = $gb->getRecord($ip);

if ($data) {
    if (isset($data["cc"]) && isset($data["district"]) && isset($data["region"]) && isset($data["city"]) && isset($data["lat"]) && isset($data["lng"])) {
        $country = $data["cc"];
        $district = $data["district"];
        $region = $data["region"];
        $city = $data["city"];
        $latitude = $data["lat"];
        $longitude = $data["lng"];

        echo "<br/><b>Ваш адрес:</b>";
        echo "<br/> Страна: " . $country;
        echo "<br/> Зона: " . $district;
        echo "<br/> Область: " . $region;
        echo "<br/> Город: " . $city;
        echo "<br/> Широта: " . $latitude;
        echo "<br/> Долгота: " . $longitude;

    } elseif (isset($data["cc"])) {
        $country = $data["cc"];

        echo "<br/><b>Ваш адрес:</b>";
        echo "<br/> Страна: " . $country;
    }
} else {
    echo "Ваш адрес не определен!";
}
?>

</body>
</html>