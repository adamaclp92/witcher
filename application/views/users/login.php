<?php echo form_open('users/login'); ?>
    <div class="row">
        <div class="col-md-4 offset-4">
            <h1 class="text-center"><?php echo $title; ?></h2>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Írd be a felhasználóneved!" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Írd be a jelszavad!" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Bejelentkezés</button>
        </div>
    </div>


<?php echo form_close(); ?>