<?php
    class Chars extends CI_Controller{
        public function index(){
            $data['title'] = 'Karakterek';

            $data['chars'] = $this->char_model->get_chars();

            $this->load->view('templates/header');
            $this->load->view('chars/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL){
            $data['char'] = $this->char_model->get_chars($slug);

            if(empty($data['char'])){
                show_404();
            }
            $data['title'] = $data['char']['name'];
            $this->load->view('templates/header');
            $this->load->view('chars/view', $data);
            $this->load->view('templates/footer');
        }
    }