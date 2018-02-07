<?php

$clients = [
	[
	'firstName' => 'Джон',
	'lastName' => 'Леннон', 
	'address' => array ('street' => 'Ленина, 14-45', 'city' => 'Москва', 'postalCode' => '101101'),
	'phoneNumbers' => array ('+7 (903) 123-4567', '+7 (495) 987-6543')
	],

	[
	'firstName' => 'Джимми',
	'lastName' => 'Пейдж', 
	'address' => array ('street' => 'Дирижаблестроителей, 4-17', 'city' => 'Магнитогорск', 'postalCode' => '665544'),
	'phoneNumbers' => array ('+7 (905) 777-8899', '+7 (916) 222-3344')
	],

	[
	'firstName' => 'Риччи',
	'lastName' => 'Блэкмор', 
	'address' => array ('street' => 'Пурпурная, 99-189', 'city' => 'Сочи', 'postalCode' => '445566'),
	'phoneNumbers' => array ('+7 (985) 111-2233', '+7 (903) 098-5533')
	],

	[
	'firstName' => 'Рорри',
	'lastName' => 'Гэллахер', 
	'address' => array ('street' => 'Св. Патрика, 84-76', 'city' => 'Владивосток', 'postalCode' => '345612'),
	'phoneNumbers' => array ('+7 (903) 654-8477', '+7 (917) 096-4213')
	]
];

// превращаем массив в json-строку:
//$tmp = json_encode($clients, JSON_UNESCAPED_UNICODE);
//
// копируем строку в отдельный файл:
//echo $tmp."<br>";

// превращаем строку json в массив:
$url = "lesson_2-1.json";
$text = file_get_contents($url);
$info = json_decode($text, true);

// echo "<br><pre>";
// print_r($info);

// проверка на ошибки - вещь полезная

/*switch (json_last_error()) {
  case JSON_ERROR_NONE:
    $data_error = '';
    break;
  case JSON_ERROR_DEPTH:
    $data_error = 'Достигнута максимальная глубина стека';
    break;
  case JSON_ERROR_STATE_MISMATCH:
    $data_error = 'Неверный или не корректный JSON';
    break;
  case JSON_ERROR_CTRL_CHAR:
    $data_error = 'Ошибка управляющего символа, возможно верная кодировка';
    break;
  case JSON_ERROR_SYNTAX:
    $data_error = 'Синтаксическая ошибка<br>';
    break;
  case JSON_ERROR_UTF8:
    $data_error = 'Некорректные символы UTF-8, возможно неверная кодировка';
    break;  
  default:
    $data_error = 'Неизвестная ошибка';
    break;
}
// Если ошибки есть, то выводим их
if($data_error !='') echo $data_error;

// проверяем, массив ли это
$info = array('это', 'массив');
echo is_array($info) ? 'Массив' : 'Не массив';
echo "\n";
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
</head>
<body>

<style>
html, body {
    position: relative;
    margin: 0 auto;
	display: block;
    font-size: 15px;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    text-align: center;
}
section {
    position: relative;
    margin: 0 auto;
	display: block;
	width: 1100px;
	text-align: center;
}

.header {
    position: relative;
    margin: 0 auto;
	display: block;
	font-size: 20px;
	font-weight: 700;
	margin: 20px 0;
	text-transform: uppercase;
}

table {
	border: 2px solid grey;
	border-collapse: collapse;
	width: 100%;
}

th {
	border: 1px solid grey;

	font-size: 14px;
	padding: 4px;
    text-transform: uppercase;
}

td {
	border: 1px solid grey;
	padding: 4px 10px;
	text-align: left;
}

thead {
	border-bottom: 2px solid grey;
	background-color: yellow;
}

</style>

	<section>
		<div class="header">
			Список клиентов
		</div>
		<table>
			<thead>
				<tr>
					<th rowspan="2">Имя</th>
					<th rowspan="2">Фамилия</th>
					<th colspan="3">Адрес:</th>
					<th colspan="2">Телефоны:</th>
				</tr>
				<tr>
					<th>Улица</th>
					<th>Город</th>
					<th>Индекс</th>
					<th>Мобильный</th>
					<th>Другой</th>
				</tr>
			</thead>

			<tbody>

			<?php foreach ($clients as $client) { ?>
				<tr>
					<td><?php echo $client['firstName'];?></td>
					<td><?php echo $client['lastName'];?></td>
					<td><?php echo $client['address']['street'];?></td>
					<td><?php echo $client['address']['city'];?></td>
					<td><?php echo $client['address']['postalCode'];?></td>
					<td><?php echo $client['phoneNumbers'][0];?></td>
					<td><?php echo $client['phoneNumbers'][1];?></td>
			<?php } ?>
				</tr>
			</tbody>
		</table>
	</section>
</body>
</html>