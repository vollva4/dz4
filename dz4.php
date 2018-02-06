<?php 
$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Moscow,Ru&appid=6c532ad7bfe38eeb69dc23edfa8ad4a7') ;
//echo $content;
$decoded = json_decode($content, true);
/*echo '<pre>';
print_r($decoded);*/
echo 'Текущая температура: ', $decoded['main'] ['temp'] - 273, ' Градусов Цельсия.', '</br>', 'Давление: ',($decoded['main'] ['pressure'] / 1000)*750, ' мм. ртутного столба.', '</br>','Влажность:',$decoded['main'] ['humidity'], '%.', '</br>';
echo 'Погода сейчас:', '</br>' ;
echo '	Ветер:', ' направление: ', $decoded['wind'] ['deg'], ' градусов, скорость: ',$decoded['wind'] ['speed'], ' метров в сеrунду.', '</br>';
echo '	Облачность:' , $decoded['clouds'] ['all'], '%.','</br>';







?>