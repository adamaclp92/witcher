<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('chars/create'); ?>
  <div class="form-group">
    <label>Név</label>
    <input type="text" class="form-control" name="name" placeholder="Írd be a nevet!">
  </div>
  <div class="form-group">
    <label>Leírás</label>
    <textarea id="" class="form-control" name="description" placeholder="Add meg a karakter leírását!"></textarea>
  </div>

  <div class="form-group">
    <label>Faj</label>
    <select name="race_id" class="form-control">
      <?php foreach($races as $race): ?>
        <option value="<?php echo $race['raceid']; ?>"><?php echo $race['racename']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  <div class="form-group">
    <label>Kép feltöltése</label><br>
    <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-secondary">Elfogad</button>
</form>