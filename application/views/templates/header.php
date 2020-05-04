<!DOCTYPE html>
    <head>
        <title>Witcher</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
      </head> 
    
    <body>  
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">The Witcher</a>
  <div class=" navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url(); ?>">Kezdőoldal </a></li>
      <li><a class="nav-link" href="<?php echo base_url(); ?>about">A Witcher világa</a></li>
      <li><a class="nav-link" href="<?php echo base_url(); ?>chars">Karakterek </a></li>
      <li><a class="nav-link" href="<?php echo base_url(); ?>races">Fajok </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!$this->session->userdata('logged_in')): ?>

        <li> <a class="nav-link" href="<?php echo base_url(); ?>users/login">Bejelentkezés</a></li>
        <li> <a class="nav-link" href="<?php echo base_url(); ?>users/register">Regisztráció</a></li>
  
      <?php endif; ?>
      <?php if($this->session->userdata('logged_in')): ?>

      <li><a class="nav-link" href="<?php echo base_url(); ?>chars/create">Karakter készítő </a></li>
      <li> <a class="nav-link" href="<?php echo base_url(); ?>races/create">Faj létrehozása</a></li>
      <li> <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Kijelentkezés</a></li>

      <?php endif; ?>

    </ul>
  </div>
</nav>
<br>


<div class="container">
<?php if($this->session->flashdata('user_registered')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('character_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('character_created').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('character_updated')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('character_updated').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('race_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('race_created').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('character_deleted')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('character_deleted').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('race_deleted')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('race_deleted').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedin')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('login_failed')): ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
<?php endif; ?>