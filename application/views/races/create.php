<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('races/create'); ?>
    <div class="form-group">
        <input type="text" class="form-control" name="racename" placeholder="Add meg a nevet">
    </div>
    <button type="submit" class="btn btn-secondary">Hozzáad</button>
</form>

