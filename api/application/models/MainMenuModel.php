<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainMenuModel extends CI_Model {

	public function get()
	{
		$data['mainMenu'] = $this->db->get('main_menu_catg')->result();
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
		$fields = $this->db->list_fields('main_menu_catg');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('main_menu_catg',$post);
		return $data;
	}
	public function edit()
	{
		$data['mainMenu'] = $this->db->get_where('main_menu_catg',array("id"=>$_POST['id']))->row();
		return $data;
	}
	public function update()
	{
		$post = $this->input->post();
		unset($post["id"]);
		$this->db->where("id",$_POST['id']);
		$data = $this->db->update('main_menu_catg',$post);
		return $data;
	}
	public function delete()
	{
		$this->db->where("id",$_POST['id']);	
		$data = $this->db->delete('main_menu_catg');
		return $data;
	}
}
