<h1 class="text-center my-4"><?= $title; ?></h1>      

<?php foreach($races as $race) : ?>
    <div class="row mx-md-5">
       
        <div class="col-md-2">
            <h4 class="mx-5 my-5"><?php echo $race['racename']; ?></h4>
        </div>
        <?php if($this->session->userdata('logged_in')): ?>
            <a class="px-md-5 ml-5 mt-5 text-danger" href="<?php echo site_url('races/delete/'.$race['raceid']); ?>">Törlés</a>
            <a class="px-md-5 ml-5 mt-5" href="<?php echo site_url('/download/'.$race['raceimages']); ?>">Kép letöltés</a>
        <?php endif; ?> 
        <div class="col-mx-4">
            <img style="height: 100%; width: 100%;" src="<?php echo site_url(); ?>/assets/<?php echo $race['raceimages']; ?>">
        </div> 
    </div>
<?php endforeach; ?>    



           