<?php 
$content = file_get_contents('http://samples.openweathermap.org/data/2.5/weather?q=Moscow,ru&appid=b6907d289e10d714a6e88b30761fae22') ;
//echo $content;
$decoded = json_decode($content, true);
/*echo '<pre>';
print_r($decoded);*/
echo 'Текущая температура: ', $decoded['main'] ['temp'] - 273, ' Градусов Цельсия.', '</br>', 'Давление: ',($decoded['main'] ['pressure'] / 1000)*750, ' мм. ртутного столба.', '</br>','Влажность:',$decoded['main'] ['humidity'], '%.', '</br>';
echo 'Погода сейчас:', '</br>' ;
echo '	Ветер:', ' направление: ', $decoded['wind'] ['deg'], ' градусов, скорость: ',$decoded['wind'] ['speed'], ' метров в сеrунду.', '</br>';
echo '	Облачность:' , $decoded['clouds'] ['all'], '%.','</br>';







?>