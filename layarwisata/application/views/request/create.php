

<!DOCTYPE html>
<html>
<head>
    <title>Request</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/request.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Questrial|Text+Me+One" rel="stylesheet">
</head>
<body>    
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    <div class="nav">

  <ul>
    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
    <li><a href="<?php echo base_url(); ?>destinations">Destination</a></li>
    <li><a href="<?php echo base_url(); ?>request">Request</a></li>
    <li><a href="<?php echo base_url(); ?>aboutus">About Us</a></li>

    <?php if(!$this->session->userdata('logged_in')) : ?>
      <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
      <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
    <?php endif; ?>

    <?php if($this->session->userdata('logged_in')) : ?>
      <li><a href="<?php echo base_url(); ?>destinations/create">Create Destination</a></li>
      <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
    <?php endif; ?>
  </ul>


    <br><br><br><br>
     <div class="header">
        <h1>Your Request</h1>
        <h3>LayarWisata</h3>
    </div>
    <div class="formulir">
    <?php echo form_open_multipart('request/create'); ?>
            <div class="data1">
                <table>
                <tr>
                    <td>Kritik dan Saran</td>
                    <td><textarea name="kritik" rows="5" cols="18" placeholder="Kritik & saran">
                    </textarea></td>
                </tr>
                  <tr>
                    <td>Tempat Wisata yang ingin ditambahkan</td>
                    <td><textarea name="wisata" rows="5" cols="18" placeholder="tambah tempat wisata baru">
                    </textarea></td>
                </tr>    
                </table>
            </div>
            <center>
                <input type="submit" name="submit" value="submit request!"> 
            </center>
    </form>
    </div>
</body>
</html>
