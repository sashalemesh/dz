<?php
// Код для всех страниц - вывод информации о посещенных страницах
//echo $_SESSION["pages"];
$pages = explode('|', $_SESSION["pages"]);
if(is_array($pages)){
	array_pop($pages);
	echo "<ol>";
		foreach($pages as $value){
			echo "<li>$value</li>";
		}
	echo "</ol>";
}
/*
ЗАДАНИЕ 2
- В случае сохранения данных 
	- в массив, проверьте, существует ли он в сессии
	- в строку, преобразуйте её в массив
- Выводите в цикле список всех посещенных пользователем страниц

*/
?>