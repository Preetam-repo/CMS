<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrePrimaryModel extends CI_Model {

	public function get()
	{
		$data['ppm'] = $this->db->get(substr($_POST['page'],3))->result_array();
		$data['exportOptions'] = $this->db->get_where("importsettings",array("formName"=>explode("_", substr($_POST['page'],3))[0]))->result_array();
		return $data;
	}
	public function getSelects()
	{
		$post = $this->input->post('selects');
		foreach ($post as $value) {
		$data[$value] = $this->db->get(substr($value,0,-2))->result_array();
		}
		return $data;
	}
	public function save()
	{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		unset($post['action']);
		$data = $this->db->insert($_POST['action'],$post);
		return $data;
	}
}