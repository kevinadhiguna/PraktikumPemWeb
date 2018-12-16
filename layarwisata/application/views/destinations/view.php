<br><br><br>

<link rel="stylesheet" type="text/css" href="view.css">
<div class="view">
<h2><?php echo $dest['nama_destinasi']; ?></h2>
		<small class="post-date">Posted on: <?php echo $dest['created_at']; ?></small><br>
	<div class="post-body">
		<?php echo $dest['deskripsi']; ?>
	</div>

<hr>
<?php if($this->session->userdata('logged_in')) : ?>
	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>destinations/edit/<?php echo $dest['slug']; ?>"><input type="submit" value="Edit" style="width: 100%;
	background-color:#3c6382;
	border-radius: 20px;
	padding: 10px;
	color: white;
	font-family: 'Oxygen';
	margin-top: 10px;
	font-size: 15px;
	margin-right: 10px;
	float :left;
	width: 10%;
	
}
 ">
</a>
	<?php echo form_open('/destinations/delete/'.$dest['id']); ?>
		<input type="submit" value="Delete" style="width: 100%;
	background-color:#3c6382;
	border-radius: 20px;
	padding: 10px;
	color: white;
	font-family: 'Oxygen';
	margin-top: 10px;
	font-size: 15px;
	float :center;
	width: 10%;
" >
	</form>
</div>

<?php endif; ?>