<h2><?php echo $char['name']; ?></h2>
<div class="post-body">
<?php echo $char['description']; ?>
</div>

<hr>
<div class="row mx-md-n5">
<a class="btn btn-success px-md-3 ml-5" href="<?php echo site_url('/chars/edit/'.$char['slug']); ?>">Módosítás</a>
<?php echo form_open('chars/delete/'.$char['id']); ?>
<input class="px-md-3 btn btn-danger ml-2" type="submit" value="Törlés">
</form>
</div>