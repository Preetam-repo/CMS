<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleModel extends CI_Model {

	public function get()
	{
		$data['assignMenu'] = $this->db->get('assign_page_menu')->result();
		$data['facility'] = $this->db->get('facility')->result();
		$data['mainMenu'] = $this->db->get('main_menu_catg')->result();
		$data['subMenu'] = $this->db->get('sub_menu_view')->result();
		// $data['roles'] = $this->db->get('rolesView')->result();
		return $data;
	}
	public function save()
	{
		$post = $this->input->post();
		// $post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		// $post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		// $post['last_updated_time'] = date("Y-m-d H:i:s");
		// $post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('roles');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('roles',$post);
		return $data;
	}
}