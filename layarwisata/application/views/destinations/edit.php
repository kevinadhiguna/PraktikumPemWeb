<br><br>
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('destinations/update'); ?>
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $dest['id'];?> ">

    <label>Nama Lokasi</label>
    <input type="text" class="form-control" name="nama_destinasi" placeholder="Add Title" value="<?php echo $dest['nama_destinasi']; ?>">
  </div>

  <div class="form-group">
    <label>Deskripsi</label>
    <textarea id="editor1" class="form-control" name="deskripsi" placeholder="Add Body"><?php echo $dest['deskripsi']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


