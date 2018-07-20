<?php 
//Подключение библиотек
require_once('models/gallery.php');
// подготовка данных
$current_album = $_GET['name'];
$photos = (new Album($current_album))->GetItemList();

$title = '<a href="index.php">Галерея фотографий</a>';

//Выбор шаблона содержимого
$content = 'views/content-photos.php';

include 'views/main.php'; ?>