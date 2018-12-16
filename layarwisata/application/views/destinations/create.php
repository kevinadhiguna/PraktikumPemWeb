<br><br><br>
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('destinations/create'); ?>
  <div class="form-create">
    <label>Destination Name</label>
    <input type="text" name="nama_destinasi" placeholder="Add Title"><br>
    <label>Add Description</label>
    <textarea id="editor1" name="deskripsi" placeholder="Add Body"></textarea><br>
    <center>
      <button type="submit">Add place!</button> 
    </center>
  </div>
</form>
