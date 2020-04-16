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
            $data['title'] = 'Faj hozzáadása';
            $this->form_validation->set_rules('racename', 'Racename', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('races/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->race_model->create_race();

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
            $this->race_model->delete_race($raceid);

            $this->session->set_flashdata('race_deleted', 'A faj törölve.');

            redirect('races');
         }

       
    }