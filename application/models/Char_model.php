<?php
     class Char_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_chars($slug = FALSE){
            if($slug===FALSE){
                $query = $this->db->get('characters');
                return $query->result_array();
            }
           
            $query = $this->db->get_where('characters', array('slug'=> $slug));
            return $query->row_array();
        }

        public function create_char(){
            $slug = url_title($this->input->post('name'));

            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'description' => $this->input->post('description')
            );
            return $this->db->insert('characters', $data);
        }

        public function delete_char($id){
            $this->db->where('id', $id);
            $this->db->delete('characters');
            return true;
        }

        public function update_char(){
            $slug = url_title($this->input->post('name'));

            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'description' => $this->input->post('description')
            );

            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('characters', $data);
        
        }
    }