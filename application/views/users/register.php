<?php echo validation_errors(); ?>
<h2 class="text-center"><?= $title; ?></h2>
<div class="row">

<div class="col-md-4">
        <img style="height: 100%; width: 100%;" src="<?php echo site_url(); ?>/assets/witcher.png">
</div> 

<div class="col-md-5">
<?php echo form_open('users/register'); ?>
    <div class="form-group"> 
        <label>Teljes név</label>
        <input type="text" class="form-control" name="name" placeholder="Ide írd a teljes neved!">
    </div>
    <div class="form-group"> 
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" placeholder="Ide írd az e-mail címed!">
    </div>
    <div class="form-group"> 
        <label>Felhasználónév</label>
        <input type="text" class="form-control" name="username" placeholder="Ide írd a felhasználóneved!">
    </div>
    <div class="form-group"> 
        <label>Jelszó</label>
        <input type="password" class="form-control" name="password" placeholder="Ide írd a jelszavad!">
    </div>
    <div class="form-group"> 
        <label>Jelszó megerősítése</label>
        <input type="password" class="form-control" name="password2" placeholder="Jelszó megerősítése">
    </div>
    <button type="submit" class="btn btn-primary">Regisztráció</button>
<?php echo form_close(); ?>
</div>
</div>