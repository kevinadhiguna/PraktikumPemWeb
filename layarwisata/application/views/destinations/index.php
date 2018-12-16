<br>
<link rel="stylesheet" type="text/css" href="navbar.css">
<h2><?= $title ?></h2>
<?php foreach($dests as $dest) : ?>
	<h3><?php echo $dest['nama_destinasi']; ?></h3>
	<div class="row">
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $dest['created_at']; ?> in <strong><?php echo $dest['nama_destinasi']; ?></strong></small><br>
		<?php echo word_limiter($dest['deskripsi'], 60); ?>
		<p><a class="btn btn-default" style=" color:white" href="<?php echo site_url('/destinations/'.$dest['slug']); ?>">Read More</a></p>
		<br><br>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination">
		<?php echo $this->pagination->create_links(); ?>
</div>