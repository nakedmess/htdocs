
<?php include('includes/inc.php'); ?>
<?php include('../inc/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$titlex;?> - Admin cp</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</head>
<body>
<?php
if(isset($_COOKIE['user'])){
?>

<div id="main_nav">
	<div class="menu_header">Admin panel</div> <span class="log_out">Log out</span>
		<a href="?admin_users"><li>Admin users</li></a>
		<a href="?news"><li>News</li></a>
		<a href="?category"><li>Categories</li></a>
		<a href="?comments"><li>Comments</li></a>
</div>

<?php
	  if(file_exists($pagex)){ include($pagex); }
 } else{
	include('includes/login.php');
}

?>
<script type="text/javascript">

  $( ".log_out" ).click(function() {
    var answer = window.confirm("Log out?");
if (answer) {
  $.removeCookie("user");
  $.removeCookie("hash");
  window.setTimeout('location.reload("/")', 1000);
}
else {
window.hide();
}
});
//prevent form resubmission
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</script>
</body>
</html>
