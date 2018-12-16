<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<br><h1><?= $title; ?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="nama" placeholder="Name">
				<p>Address</p>
				<textarea type="text" name="alamat" placeholder="Address"></textarea><br><br>
				<label>Email</label>
				<input type="email" name="email" placeholder="Email">
				<label>Username</label>
				<input type="text" name="username" placeholder="Username">
				<label>Password</label>
				<input type="password" name="password" placeholder="Password">
				<label>Confirm Password</label>
				<input type="password" name="password2" placeholder="Confirm Password">
				<label>Emergency Question</label>
				<select name="pertanyaan">
					<option>Tempat Wisata Favorit anda?</option>
					<option>Nama orang yang anda sayangi?</option>
					<option>Siapa dosen favoritmu?</option>
				</select><br><br>
				<label>Your Answer</label>
				<input type="text" name="jawaban" placeholder="Your Answer">
				<center>
					<button type="submit">Create Account!</button>
				</center>
			</div>
		</div>
	</div>
<?php echo form_close(); ?>
