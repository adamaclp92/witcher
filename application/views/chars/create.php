<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('chars/create'); ?>
  <div class="form-group">
    <label>Név</label>
    <input type="text" class="form-control" name="name" placeholder="Írd be a nevet!">
  </div>
  <div class="form-group">
    <label>Leírás</label>
    <textarea id="" class="form-control" name="description" placeholder="Add meg a karakter leírását!"></textarea>
  </div>
  
  <button type="submit" class="btn btn-secondary">Elfogad</button>
</form>