<div id="content">
	<h2> Page admins </h2>
	<h3> Add / edit </h3>
  <?php


  	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['passr'])){
  		$user = smart($_POST['username']);
  		$email = smart($_POST['email']);
  		$name = smart($_POST['name']);
  		$pass = smart($_POST['pass']);
  		$pass2 = smart($_POST['passr']);
  		$hash = smart($randomletter);
  
  		if($pass == $pass2){
  			if($user != "" && $email != "" && $pass != "" && $name != ""){
  				$pass = md5(md5($pass));
  				echo $pass;
  				$row = $DB->query("SELECT user FROM admin_users WHERE user = '$user'");
  				$num = $row->num_rows;
  				echo $num;
  				if($num <= 0 ){
  				$DB->query("INSERT INTO admin_users (`user`,`pass`,`email`,`name`,`pass_hash`) VALUES ('$user','$pass','$email','$name','$hash')");
  				echo "<div class='ok success'>User added!</div>";
  				}else{
  				$DB->query("UPDATE admin_users SET `pass`='$pass', `email`='$email', `name`='$name' WHERE user='$user'");
  				echo "<div class='ok success'>User updated!</div>";
  				}
  			}else{
  				echo "<div class='err success'>Please fill out all fields!</div>";
  			}


  		}else{
  			echo "<div class='err success'>Passwords do not match!</div>";
  		}

  	}
    ?>
	<form method="POST">
	<div class=" col-md-6">
    		<input type="text" class="form-control" id="username" name="username" placeholder="Username"><br>
    		<input type="email" class="form-control" id="email" name="email" placeholder="E-mail"><br>
    		<input type="text" class="form-control" id="name" name="name" placeholder="Name"><br>
	</div>
		<div class=" col-md-6">
    		<input type="password" class="form-control" id="pass" name="pass" placeholder="Password"><br>
    		<input type="password" class="form-control" id="passr" name="passr" placeholder="Repeat password"><br>
    		<input class=" btn btn-info" type="submit" name="submit" value="Save">
	</div>
	</form>
<h3 class="col-md-12">Admin user list</h3>
<table class="table">
<tr>
<td><b>User</b></td>
<td><b>Name</b></td>
<td><b>E-mail</b></td>
<td><center><b>Edit</b></center></td>
<td><center><b>Delete</b></center></td>
</tr>

<?php
	$row = $DB->query("SELECT * FROM admin_users");
	while ($x = $row->fetch_assoc()) { ?>

<tr>
<td><?=$x['user'];?></td>
<td><?=$x['name'];?></td>
<td><?=$x['email'];?></td>
<td><center><a onclick="set_edit('<?=$x['user'];?>','<?=$x['name'];?>','<?=$x['email'];?>')"><span class="glyphicon glyphicon-pencil"></span></a></center></td>
<td><center><a class="confirm" href="?admin_users&delete_user_id=<?=$x['id'];?>"><span class="glyphicon glyphicon-remove" style="color: red;"></span></a></center></td>
</tr>


<?php }
?>

	</table>
</div>
