<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssignPageMenuModel extends CI_Model {

	public function get()
	{
		$data['assignMenu'] = $this->db->get('assign_page_view')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function getSaved()
	{
		$data['assignMenu'] = $this->db->get('assign_page_menu')->result();
		$data['facility'] = $this->db->get('facility')->result();
		$data['mainMenu'] = $this->db->get('main_menu_catg')->result();
		$data['subMenu'] = $this->db->get('sub_menu_view')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function save()
	{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('assign_page_menu');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('assign_page_menu',$post);
		return $data;
	}
	public function edit()
	{
		$data['assignMenu'] = $this->db->get_where('assign_page_menu',array("id"=>$_POST['id']))->row();
		return $data;
	}
	public function update()
	{
		$post = $this->input->post();
		unset($post["id"]);
		$this->db->where("id",$_POST['id']);
		$data = $this->db->update('assign_page_menu',$post);
		return $data;
	}
	public function delete()
	{
		$this->db->where("id",$_POST['id']);	
		$data = $this->db->delete('assign_page_menu');
		return $data;
	}
}
