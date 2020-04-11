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

        public function create(){
            //ez ugyanaz, mint a create.php view-ban a title
            $data['title'] = 'Karakter készítő';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('chars/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->char_model->create_char();
                redirect('chars');
            }
        }

        public function delete($id){
            $this->char_model->delete_char($id);
            redirect('chars');
         }

         public function edit($slug){
            $data['char'] = $this->char_model->get_chars($slug);

            if(empty($data['char'])){
                show_404();
            }
            $data['title'] = 'Karakter módosítás';
            $this->load->view('templates/header');
            $this->load->view('chars/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->char_model->update_char();
            redirect('chars');
        }

    }