<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Our Team</title>
	
</head>
<body>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
	<div class="nav">

	<ul>
    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
    <li><a href="<?php echo base_url(); ?>destinations">Destination</a></li>
    
    <li><a href="<?php echo base_url(); ?>aboutus">About Us</a></li>

    <?php if(!$this->session->userdata('logged_in')) : ?>
      <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
      <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
    <?php endif; ?>

    <?php if($this->session->userdata('logged_in')) : ?>
      <li><a href="<?php echo base_url(); ?>request">Request</a></li>
      <li><a href="<?php echo base_url(); ?>destinations/create">Create Destination</a></li>
      <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
    <?php endif; ?>
  </ul>
	<br>
	<br>
	<br>
	</div>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aboutus.css">
<div class="team-section">
	<h1>About Us</h1>
	<span class="border"></span>
	<div class="ps">
		<a href="#15"><img src="<?php echo base_url() ?>assets/images/aboutus/15.jpg" alt=""></a>
		<a href="#55"><img src="<?php echo base_url() ?>assets/images/aboutus/55.jpg" alt=""></a>
		<a href="#65"><img src="<?php echo base_url() ?>assets/images/aboutus/65.jpg" alt=""></a>

	</div>
	
	<div class="section" id="15">
		<span class="name">Junia Adhani Juzar<br>140810170015</span>
		<span class="border"></span>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
		</p>
	</div>

	<div class="section" id="55">
		<span class="name">Kevin Akbar Adhiguna<br>140810170055</span>
		<span class="border"></span>
		<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

		</p>
	</div>

	<div class="section" id="65">
		<span class="name">Yoga Prambudi SP<br>140810170065</span>
		<span class="border"></span>
		<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
		</p>
	</div>

</div>

</body>
</html>