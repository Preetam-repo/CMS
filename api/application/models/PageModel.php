<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageModel extends CI_Model {

	public function get()
	{
		$data['pageLayout'] = $this->db->get('pagelayout')->result();
		$data['assignMenu'] = $this->db->get('assign_page_menu')->result();
		$data['facility'] = $this->db->get('facility')->result();
		$data['mainMenu'] = $this->db->get('main_menu_catg')->result();
		$data['subMenu'] = $this->db->get('sub_menu_view')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function getSaved()
	{
		$data['assignMenu'] = $this->db->get('assign_page_menu')->result();
		$data['facility'] = $this->db->get('facility')->result();
		$data['mainMenu'] = $this->db->get('main_menu_catg')->result();
		$data['subMenu'] = $this->db->get('sub_menu_view')->result();
		return $data;
	}
	public function save()
	{
		$post = $this->input->post();
		if (!empty($this->db->get_where('pagelayout', array('apm_id' => $post['apm_id']))->result())) {
		$this->db->where('apm_id',$post['apm_id']);
		return $this->db->update('pagelayout',$post);
		}
		return $this->db->insert('pagelayout',$post);
	}
	public function adminGet()
	{
		$data['assignMenu'] = $this->db->get('assign_page_menu')->result();
		$data['facility'] = $this->db->get('facility')->result();
		$data['mainMenu'] = $this->db->get('main_menu_catg')->result();
		$data['subMenu'] = $this->db->get('sub_menu_view')->result();
		$this->db->select("role");
		$data['menuRoles'] = $this->db->get_where('menu_sub_user_roles',array('superUserId' => $this->input->post("userId")))->row();
		return $data;
	}
}
