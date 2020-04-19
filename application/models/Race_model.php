<?php
    class Race_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_races(){
            $this->db->order_by('racename');
            $query = $this->db->get('races');
            return $query->result_array(); 
        }

        public function create_race(){
            $data = array(
                'racename' => $this->input->post('racename')
            );
            return $this->db->insert('races', $data);
        }

        public function get_race($raceid){
            $query = $this->db->get_where('races', array('raceid' => $raceid));
            return $query->row();
        }

        public function delete_race($raceid){
            $this->db->where('raceid', $raceid);
            $this->db->delete('races');
            return true;
        }

    }