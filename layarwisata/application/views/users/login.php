<?php echo form_open('users/login'); ?>
<br><br><br><br><br><br>
	</div>
	<div class="loginbox">
	<h1>Login Here</h1>
	<form id="loginbox">
		<p>Username</p>
		<input type="text" id="user" name="username" placeholder="Enter Username" required autofocus>
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password" required autofocus>
		<input type="submit"value="Login"/>
		<center>
			<a href="<?php echo base_url(); ?>users/register">Create account</a>
		</center>
	</form>
</div>

</div>

<?php echo form_close(); ?>