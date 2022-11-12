
<?php include('includes/inc.php'); ?>
<?php include('../inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$titlex;?> - Admin cp</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<?php
//if(isset($_COOKIE['user'])){
?>

<div id="main_nav">
	<div class="menu_header">Admin panel</div>
		<a href="?admin_users"><li>Admin users</li></a>
		<a href="?news"><li>News</li></a>
		<a href="?category"><li>Categories</li></a>
		<a href="?comments"><li>Comments</li></a>
</div>

<?php
	  if(file_exists($pagex)){ include($pagex); }
/*    else{
	include('includes/login.php');
}*/

?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
