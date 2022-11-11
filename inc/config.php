<?php

$DB = new mysqli('localhost','root','','ict_1');
$base_url = 'http://idworkshop.eu/';
if(isset($_GET['news'])){
  $page 	=	 'inc/news.php';
  $title	=	 'Ziņas';
  $front	=	 'not-front';
}elseif(isset($_GET['news-single'])){
  $page 	=	 'inc/news-single.php';
  $title	=	 'News';
  $front	=	 'not-front';
}else{
  $page 	=	 'inc/home.php';
  $title	=	 'Sākums';
  $front	=	 'front';
  $_GET['home'] = true;
}
?>
