<?php
    class Races extends CI_Controller{

        public function index(){
            $data['title'] = 'Fajok';

            $data['races'] = $this->race_model->get_races();

            $this->load->view('templates/header');
            $this->load->view('races/index', $data);
            $this->load->view('templates/footer');
        }

        public function create(){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $data['title'] = 'Faj hozzáadása';
            $this->form_validation->set_rules('racename', 'Racename', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('races/create', $data);
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
                    $race_image = 'noimage.jpg';
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $race_image= $_FILES['userfile']['name'];
                }

                $this->race_model->create_race($race_image);

                $this->session->set_flashdata('race_created', 'A faj elkészült.');

                redirect('races');
            }
        }

        public function chars($raceid){
            $data['title'] = $this->race_model->get_race($raceid)->racename;
            $data['chars'] = $this->char_model->get_chars_by_race($raceid);

            $this->load->view('templates/header');
            $this->load->view('chars/index', $data);
            $this->load->view('templates/footer');
        }

        public function delete($raceid){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $this->race_model->delete_race($raceid);

            $this->session->set_flashdata('race_deleted', 'A faj törölve.');

            redirect('races');
         } 
    }