<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//  функция include_template обязательно первая 
require_once('fn/functions.php');

// Подключаем контроллер для пагинации и сайд бара
require_once('controlers/settingPagination.php');


// работает вывод шабки 
$header_content = include_template('header.php',[
    "title" => 'Мои котикти'
]);


//  include_template для подключения шаблона с пагинацией и сайд бара
$pagination_content = include_template('pagination.php', [
    'product_on_page' => $product_on_page,
    'pages_total' => $pages_total,
    'filrs_item' => $filrs_item,
    'link_color' => $link_color,
    // для сайд бара
    'product_count' => $product_count, // Добавляем переменную
    'posts' => $posts, // Добавляем переменную
]);
$date_content =  include_template('date.php');
// работает
$footer_content = include_template('footer.php');


//  вывод шаблонов
echo $header_content;
echo $pagination_content;
echo $date_content;
echo $footer_content;
?>
