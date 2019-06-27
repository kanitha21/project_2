<div class="banner">
	<div class="welcome_msg">
		<h1>Today's Inspiration</h1>
		<p> 
		    "Never doubt that a small group of thoughtful, committed people can change the world. <br/>
		     Indeed, it is the only thing that ever has." <br/>
			<span>~ Margaret Meade</span>
		</p>
		<a href="register.php" class="btn">Join us!</a>
	</div>
	<div class="login_div">
		<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
			<h2>Login</h2>
			<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button class="btn" type="submit" name="login_btn">Sign in</button>
		</form>
	</div>
</div>
<?php } ?>