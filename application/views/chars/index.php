<h1 class="text-center my-3"><?= $title ?></h1>
<br>
<?php foreach($chars as $char) : ?>
    <h3><?php echo $char['name']; ?></h3>
    <h6>Faj: <small><?php echo $char['racename']; ?> </small></h6>
    <h6><?php echo word_limiter($char['description'], 30); ?></h6>
    <p><a class="btn btn-secondary" href="<?php echo base_url('/chars/'.$char['id']); ?>">Tovább</a></p>
    <br>
<?php endforeach; ?>