<?php 
	require_once('models/gallery.php');


	// Подготовка данных
	$albums = (new Gallery())->GetItemList();

	$title = '<a href="index.php">Галерея фотографий</a>';
	
	$content = 'views/content-albums.php';

	include 'views/main.php'; 
	

?>

