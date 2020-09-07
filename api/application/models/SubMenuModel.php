<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubMenuModel extends CI_Model {

	public function get()
	{
		$data['subMenu'] = $this->db->get('sub_menu_view')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function save()
	{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['created_time'] = date("Y-m-d H:i:s");
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('sub_menu_catg');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				if ($value=="main_menu_id") {
					return "main_menu";
				}
				return $value;
			}
		}
		$data = $this->db->insert('sub_menu_catg',$post);
		return $data;
	}
	public function edit()
	{
		$data['subMenu'] = $this->db->get_where('sub_menu_view',array("id"=>$_POST['id']))->row();
		return $data;
	}
	public function update()
	{
		$post = $this->input->post();
		unset($post["id"]);
		$this->db->where("id",$_POST['id']);
		$data = $this->db->update('sub_menu_catg',$post);
		return $data;
	}
	public function delete()
	{
		$this->db->where("id",$_POST['id']);	
		$data = $this->db->delete('sub_menu_catg');
		return $data;
	}
}
