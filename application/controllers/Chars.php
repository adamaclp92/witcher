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
            //ez ugyanaz, mint a create.php view-ban a title
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
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max_width'] = '500';
                $config['max_height'] = '500';
                
                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('userfile')){
                    $errors = array('error' =>$this->upload->display_errors());
                    $char_image = 'noimage.jpg';
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $char_image= $_FILES['userfile']['name'];
                }

                $this->char_model->create_char($char_image);
                redirect('chars');
            }
        }

        public function delete($id){
            $this->char_model->delete_char($id);
            redirect('chars');
         }

         public function edit($id){
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
            $this->char_model->update_char();
            redirect('chars');
        }

    }