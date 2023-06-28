<?php 
	class User_model extends CI_Model{
		public function getUsers(){
			return $this->db->get('administrator')->result();
		}

		public function getUser($id){
			return $this->db->where('administrator_id',$id)->get('administrator')->row();
		}
	}
