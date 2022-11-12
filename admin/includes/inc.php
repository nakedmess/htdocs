<?php

  if(isset($_GET['category'])){
		$pagex 	=	 'includes/category.php';
		$titlex	=	 'Categories';
	}elseif(isset($_GET['comments'])){
		$pagex 	=	 'includes/comments.php';
		$titlex	=	 'Comments';
	}elseif(isset($_GET['news'])){
		$pagex 	=	 'includes/news.php';
		$titlex	=	 'News';
	}else{
		$pagex 	=	 'includes/admin_users.php';
		$titlex	=	 'Admin users';
		$_GET['home'] = true;
	}

?>
