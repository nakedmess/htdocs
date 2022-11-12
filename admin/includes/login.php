<div class="row">
	<div class="col-md-4 offset-md-4 login_content">

<?php
	if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['submit'])){
		$login = smart($_POST['login']);
		$pass  = smart($_POST['password']);
		$select = $DB->query("SELECT * FROM `admin_users` WHERE `user` = '$login'");
		$user = $select->num_rows;
		if($user == 1){
			$x = $select->fetch_assoc();
			$passh = md5(md5($pass));
			$selects = $DB->query("SELECT * FROM `admin_users` WHERE user = '$login' AND pass = '$passh'");
			$users = $selects->num_rows;
			if($users == 1){
				?>
				<center style='color: green;'><i class="aut_s" style="display: none;">Authorized! <br></i> <i class="save_d" style="display: none;">Saving data.<br></i> <i class="d_ref" style="display: none;">You're being redirected to the admin panel.<br><br></i></center>
				<script type="text/javascript">
					$('.aut_s').slideUp( 300 ).fadeIn( 400 );
					$('.save_d').slideUp( 300 ).delay( 800 ).fadeIn( 400 );
					$.cookie("user", "<?=$login?>", { expires: 1 });

					$.cookie("hash", "<?=$passh?>", { expires: 1 });

					$('.d_ref').slideUp( 300 ).delay( 1600 ).fadeIn( 400 );

					 window.setTimeout('location.reload("/")', 3000);
           event.preventDefault();

				</script>

				<?php
				echo "";
			}else{
				echo "<center style='color: red;'>Incorrect username and/or password!</center><br>";
			}
		}else{
				echo "<center style='color: red;'>Incorrect username and/or password!</center><br>";
		}
	}
?>
	<form method="POST">
		<div class="form-group">
		<input type="text" name="login" class="form-control" placeholder="Username" />
		</div>
		<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="*************" />
		</div>
		<div class="form-group">
		<input type="submit" name="submit" class="form-control btn-primary sub" value="Join">
		</div>
	</form>
	</div>
</div>
