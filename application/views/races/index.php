<h1 class="text-center my-4"><?= $title; ?></h1>      

<?php foreach($races as $race) : ?>
    <div class="row mx-md-n5">
       
        <div class="col-md-2">
            <h4 class="mx-5 my-5"><?php echo $race['racename']; ?></h4>
        </div>

        <?php if($this->session->userdata('logged_in')): ?>
        <div class="col-md-1">
            <?php echo form_open('races/delete/'.$race['raceid']); ?>
        </div>
            <button class="px-md-1 ml-5 btn btn-link" type="submit">Törlés</button>
            </form>
        <?php endif; ?> 
        
        <div class="col-mx-4">
            <img style="height: 100%; width: 100%;" src="<?php echo site_url(); ?>/assets/<?php echo $race['raceimages']; ?>">
        </div> 

    </div>
<?php endforeach; ?>    



           