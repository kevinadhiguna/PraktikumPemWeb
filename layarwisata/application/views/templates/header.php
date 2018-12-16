<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content="width=device-witdh, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Layar Wisata</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>


  <style>
        .alert {
          padding: 10px;
          background-color: #f44336;
          color: white;
        }
  </style>
</head>  
<body>
  <div class="slider">
    <div class="load">
    </div>
    <div class="content">
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
    <div style="width: 80%" class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p>'.$this->session->flashdata('user_registered').'</p>'; ?>
</div>
        
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
   <?php echo '<p>'.$this->session->flashdata('post_created').'</p>'; ?>
</div>
       
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p>'.$this->session->flashdata('post_updated').'</p>'; ?>
</div>
        
      <?php endif; ?>


      <?php if($this->session->flashdata('post_deleted')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p>'.$this->session->flashdata('post_deleted').'</p>'; ?>
</div>
        
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p>'.$this->session->flashdata('login_failed').'</p>'; ?>
</div>
        
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p>'.$this->session->flashdata('user_loggedin').'</p>'; ?>
</div>
        
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p class="alert">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
</div>
        
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo '<p class="alert">'.$this->session->flashdata('category_deleted').'</p>'; ?>
</div>
        
      <?php endif; ?>

