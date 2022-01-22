<?
if ($argc != 2)
	die("Неверное количество параметров...");
elseif (!is_numeric($argv[1]))
	die("Введенный параметр не является числом...");

for ($i = 2; $i <= 16; $i++)
	echo $i, ": ", base_convert($argv[1], 10, $i), PHP_EOL;