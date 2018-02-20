<?php 
$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Moscow,Ru&appid=6c532ad7bfe38eeb69dc23edfa8ad4a7') ;
//echo $content;
$decoded = json_decode($content, true);
$temperature = 'Текущая температура:'.  ($decoded['main'] ['temp'] - 273) . ' Градусов Цельсия.';
$pressure = 'Давление: ' . (($decoded['main'] ['pressure'] / 1000)*750) . ' мм. ртутного столба.';
$humidity = 'Влажность: ' . ($decoded['main'] ['humidity']) . ' %.'; 
$winddeg = 'Направление ветра: ' . ($decoded['wind'] ['deg']) . ' градусов,   ';
$windspeed = 'Скорость ветра: ' . ($decoded['wind'] ['speed']) . ' метров в секунду.';
$clouds = 'Облачность:  ' . ($decoded['clouds'] ['all']) . ' %.';
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
        <p><?= $temperature ?> </br>
        	<?= $pressure ?></br> 
        	<?= $humidity ?>  </br>
        	</br>   
        	 <?= $winddeg ?><?= $windspeed ?> </br>
        	 <?= $clouds ?></p>
    </div>
</body>







