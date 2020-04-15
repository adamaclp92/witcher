<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('chars/update'); ?>
    <input type="hidden" name="id" value="<?php echo $char['id']; ?>">
  <div class="form-group">
    <label>Név</label>
    <input type="text" class="form-control" value="<?php echo $char['name']; ?>" name="name" >
  </div>
  <div class="form-group">
    <label>Leírás</label>
    <textarea class="form-control " id="" name="description"><?php echo $char['description'];?></textarea>
  </div>

  <div class="form-group">
    <label>Faj</label>
    <select name="race_id" class="form-control">
      <?php foreach($races as $race): ?>
        <option value="<?php echo $race['raceid']; ?>"><?php echo $race['racename']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  <button type="submit" class="btn btn-secondary">Módosítás</button>
</form>
