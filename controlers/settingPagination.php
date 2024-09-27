<?php 
require_once('arraysFromStranitsi/posts.php'); // Подключаем массив котиков


$limit = 4; // Количество записей на одной странице
// фиксит ошибку при которой требует номер страницы на главной и присваиввает число ну или получение номера страницы
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;


$offset = ($page - 1) * $limit; 

$product_count = count($posts); // Общее количество котиков в массиве

$pages = $product_count / $limit; //Количество страниц, количество делим на лимит для округления

$pages_total = ceil($pages); // округление до целого 

$filrs_item = 1; // Начальный номер страницы

//  элементы на текущей странице
$product_on_page = array_slice($posts,$offset,$limit,true);
//  класс цвета ссылки
$link_color = "link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover";
?>
