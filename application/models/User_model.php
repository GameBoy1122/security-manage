<?php 
	class User_model extends CI_Model{
		public function getUsers(){
			return $this->db->get('enroll')->result();
		}

		public function getUser($id){
			return $this->db->where('enroll_id',$id)->get('enroll')->row();
		}
	}
