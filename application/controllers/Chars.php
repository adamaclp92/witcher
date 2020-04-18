<?php
    class Chars extends CI_Controller{
        public function index(){
            $data['title'] = 'Karakterek';

            $data['chars'] = $this->char_model->get_chars();

            $this->load->view('templates/header');
            $this->load->view('chars/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($id = NULL){
            $data['char'] = $this->char_model->get_chars($id);

            if(empty($data['char'])){
                show_404();
            }
            $data['title'] = $data['char']['name'];
            $this->load->view('templates/header');
            $this->load->view('chars/view', $data);
            $this->load->view('templates/footer');
        }

        public function create(){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $data['title'] = 'Karakter készítő';
            $data['races'] = $this->char_model->get_races();
        
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('chars/create', $data);
                $this->load->view('templates/footer');
            }else{
                $config['upload_path'] = './assets';
                $config['allowed_types'] = 'gif|jpg|png|jfif';
                $config['max_size'] = '2048';
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                
                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('userfile')){
                    $errors = array('error' =>$this->upload->display_errors());
                    $char_image = 'noimage.jpg';
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $char_image= $_FILES['userfile']['name'];
                }

                $this->char_model->create_char($char_image);

                $this->session->set_flashdata('character_created', 'A karakter elkészült.');

                redirect('chars');
            }
        }

        public function delete($id){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $this->char_model->delete_char($id);

            $this->session->set_flashdata('character_deleted', 'A karakter törölve.');

            redirect('chars');
         }

         public function edit($id){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }


            $data['char'] = $this->char_model->get_chars($id);
            $data['races'] = $this->char_model->get_races();

            if(empty($data['char'])){
                show_404();
            }
            $data['title'] = 'Karakter módosítás';
            $this->load->view('templates/header');
            $this->load->view('chars/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $this->char_model->update_char();

            $this->session->set_flashdata('character_updated', 'A karakter módosítva.');

            redirect('chars');
        }

    }