<h2><?= $title ?></h2>
<?php foreach($chars as $char) : ?>
    <h3><?php echo $char['name']; ?></h3>
    <h6><?php echo $char['description']; ?></h6>
    <p><a class="btn btn-secondary" href="<?php echo base_url('/chars/'.$char['slug']); ?>">Tovább</a></p>
    <br>
<?php endforeach; ?>