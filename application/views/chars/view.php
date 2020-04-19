<h2 class="my-4"><?php echo $char['name']; ?></h2>

<div class="row">
        <div class="col-md-3">
            <img style="height: 100%; width: 100%;" src="<?php echo site_url(); ?>/assets/<?php echo $char['char_image']; ?>">
        </div>
        <div class="col-md-9">
            <div class="post-body">
                <?php echo $char['description']; ?>
            </div>
            <hr>
            <h4>Faj: <small><?php echo $char['racename']; ?> </small></h4>
            <?php if($this->session->userdata('logged_in')): ?>
            <hr>
            <div class="row mx-md-n5">
                <a class="btn btn-success px-md-3 ml-5" href="<?php echo site_url('/chars/edit/'.$char['id']); ?>">Módosítás</a>
                <?php echo form_open('chars/delete/'.$char['id']); ?>
                <input class="px-md-3 btn btn-danger ml-2" type="submit" value="Törlés">
                </form>
            </div>
            <?php endif; ?>
        </div>