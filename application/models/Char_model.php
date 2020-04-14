<?php
     class Char_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_chars($id = FALSE){
            $this->db->join('races', 'races.raceid = characters.race_id');
            if($id===FALSE){ 
                $query = $this->db->get('characters');
                return $query->result_array();
            }
            $query = $this->db->get_where('characters', array('characters.id'=> $id));
            return $query->row_array();
        }

        public function create_char($char_image){
            $id = url_title($this->input->post('name'));

            $data = array(
                'name' => $this->input->post('name'),
                'id' => $id,
                'description' => $this->input->post('description'),
                'race_id' => $this->input->post('race_id'),
                'char_image' => $char_image
            );
            return $this->db->insert('characters', $data);
        }

        public function delete_char($id){
            $this->db->where('id', $id);
            $this->db->delete('characters');
            return true;
        }

        public function update_char(){
            $id = url_title($this->input->post('name'));

            $data = array(
                'name' => $this->input->post('name'),
                'id' => $id,
                'description' => $this->input->post('description'),
                'race_id' => $this->input->post('race_id')
            );

            $this->db->where('id', $this->input->post('id'));
            return $this->db->update('characters', $data);
        
        }

        public function get_races(){
            $this->db->order_by('racename');
            $query = $this->db->get('races');
            return $query->result_array(); 
        }

        public function get_chars_by_race($race_id){
            $this->db->order_by('characters.id', 'ASC');
            $this->db->join('races', 'races.raceid = characters.race_id');
                $query = $this->db->get_where('characters', array('race_id' => $race_id));
                return $query->result_array();
        }
    }