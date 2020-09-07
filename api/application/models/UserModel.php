<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function get()
	{
		$data['user'] = $this->db->get('sub_user')->result();
		return $data;
	}
	public function delete()
	{
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("sub_user");
	}
	public function save()
	{
		$post = $this->input->post();
		// $post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		// $post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		// $post['last_updated_time'] = date("Y-m-d H:i:s");
		// $post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('sub_user',$post);
		return $data;
	}
	public function getMenuRole()
	{
		$this->db->select("role");
		$data['userMenuRole'] = $this->db->get_where('menu_sub_user_roles',array('superUserId' => $this->input->post("userId")))->row();
		return $data;
	}
	public function saveMenuRole()
	{
		$post = $this->input->post();
		$userId = $post["userId"];
		unset($post["userId"]);
		$post["role"] = json_encode($post["role"]);
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$check = $this->db->get_where('menu_sub_user_roles',array("superUserId"=>$userId))->row();
		if (is_null($check)) {
		$post["superUserId"] = $userId;
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('menu_sub_user_roles',$post);
		return $data;
		}
		$this->db->where("superUserId",$userId);
		$data = $this->db->update('menu_sub_user_roles',$post);
		return $data;
	}
}