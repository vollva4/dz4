<?php 
$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Moscow,Ru&appid=6c532ad7bfe38eeb69dc23edfa8ad4a7') ;
//echo $content;
$decoded = json_decode($content, true);
$temperature = $decoded['main'] ['temp'] - 273;
$pressure = ($decoded['main'] ['pressure'] / 1000)*750;
$humidity = $decoded['main'] ['humidity']; 
$winddeg = $decoded['wind'] ['deg'];
$windspeed = $decoded['wind'] ['speed'];
$clouds = $decoded['clouds'] ['all'];
/*echo '<pre>';
print_r($decoded);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
    <div>
    	<h1>Погода:</h1>
        <p>Текущая температура:    <?= $temperature ?> Градусов Цельсия.</br>
        	Давление: <?= $pressure ?> мм. ртутного столба.</br> 
        	Влажность: <?= $humidity ?> %. </br>
        	 Ветер:</br>   
        	 Направление:<?= $winddeg ?> градусов, скорость: <?= $windspeed ?> метров в сеrунду.</br>
        	 Облачность: <?= $clouds ?> %.</p>
    </div>
</body>
<!--echo 'Текущая температура: ', $temperature , ' Градусов Цельсия.', '</br>', 'Давление: ',$pressure, ' мм. ртутного столба.', '</br>','Влажность:',$humidity, '%.', '</br>';
echo 'Погода сейчас:', '</br>' ;
echo '	Ветер:', ' направление: ', $winddeg, ' градусов, скорость: ',$windspeed, ' метров в сеrунду.', '</br>';
echo '	Облачность:' , $clouds, '%.','</br>';-->







