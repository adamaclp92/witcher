<h2><?= $title; ?></h2>      
<ul class="list-group">
<?php foreach($races as $race) : ?>
    <div class="row mx-md-n5">
    <div class="col-md-1">
        <p><a class="text-success" href="<?php echo site_url('/races/chars/'.$race['raceid']); ?>"><?php echo $race['racename']; ?></a></p>
    </div>
    <div class="col-md-1">
        <?php echo form_open('races/delete/'.$race['raceid']); ?>
    </div>
    <input class="px-md-1 btn btn-danger ml-5" type="submit" value="Törlés">
    </form>
    </div>
<?php endforeach; ?>    



           