<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_m extends CI_Model {

	public function get_levels($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('lvl_id', 'ASC');
			$query = $this->db->get('users_levels');
			return $query->result_array();
		}
		$query = $this->db->get_where('users_levels', array('lvl_id' => $id));
		return $query->row_array();
	}

	public function get_users($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('usr_id', 'DESC');
			$query = $this->db->get('users');
			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('usr_id' => $id));
		return $query->row_array();
	}

	public function get_usersview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('usr_id', 'DESC');
			$query = $this->db->get('users');
			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('usr_slug' => $slug));
		return $query->row_array();
	}

	public function get_iconbar($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('icb_id', 'ASC');
			$query = $this->db->get('iconbar');
			return $query->result_array();
		}
		$query = $this->db->get_where('iconbar', array('icb_id' => $id));
		return $query->row_array();
	}

	// public function get_brandlogo($id = FALSE){
	// 	if($id === FALSE){
	// 		$this->db->order_by('lbl_id', 'ASC');
	// 		$query = $this->db->get('logo_brandlogo');
	// 		return $query->result_array();
	// 	}
	// 	$query = $this->db->get_where('logo_brandlogo', array('lbl_id' => $id));
	// 	return $query->row_array();
	// }

	// public function get_slidehomepage($id = FALSE){
	// 	if($id === FALSE){
	// 		$this->db->order_by('lsh_id', 'ASC');
	// 		$query = $this->db->get('logo_slidehomepage');
	// 		return $query->result_array();
	// 	}
	// 	$query = $this->db->get_where('logo_slidehomepage', array('lsh_id' => $id));
	// 	return $query->row_array();
	// }

}