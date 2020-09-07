<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FacilityModel extends CI_Model {

	public function get()
	{
		$data['facility'] = $this->db->get('facility')->result();
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
		$fields = $this->db->list_fields('facility');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('facility',$post);
		return $data;
	}
	public function edit()
	{
		$data['facility'] = $this->db->get_where('facility',array("id"=>$_POST['id']))->row();
		return $data;
	}
	public function update()
	{
		$post = $this->input->post();
		unset($post["id"]);
		$this->db->where("id",$_POST['id']);
		$data = $this->db->update('facility',$post);
		return $data;
	}
	public function delete()
	{
		$this->db->where("id",$_POST['id']);	
		$data = $this->db->delete('facility');
		return $data;
	}
}
