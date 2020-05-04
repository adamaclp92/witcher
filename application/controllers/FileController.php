<?php
 class FileController extends CI_Controller {
  public function __construct() {
   parent::__construct ();
   $this->load->helper('download');
  }
 
  public function download($fileName = NULL) {   
   if ($fileName) {
    $file = realpath ( "./assets" ) . "/" . $fileName;
    if (file_exists ( $file )) {
        $data = file_get_contents ( $file );
        force_download ( $fileName, $data );
    } else {
     redirect ( base_url () );
    }
   }
  }
 }