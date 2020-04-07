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
    }