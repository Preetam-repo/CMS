<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AoModel extends CI_Model {

	public function checkId()
	{
		$this->db->select("name");
		$dataFilter = $this->db->get_where('user',$this->input->post())->row();
// 		$data["name"] = $dataFilter->name;
		return $dataFilter;
	}
	public function checkUrl()
	{
		if (empty($this->input->post())) {
			$Data["status"] = false;
			return $Data;
		}
		$data = $this->db->get_where('user',$this->input->post())->row();
		$Data["status"] = $data->status;
		$Data["aoId"] = $data->id;
		return $Data;
	}	
	public function loginSuper()
	{
		$usr = $this->input->post("usr");
		$pwd = $this->input->post("pwd");
		$data["status"]=false;
		if ($usr=="super_admin") {
			if ($pwd=="123456") {
				$data["UserData"]["type"] = false;
				$data["status"]=true;
				$data["url"] = "session/login.php";
				return $data;
			}
		}
		$selectedData = $this->db1->get_where("sub_user",array("userName"=>$usr,"password"=>$pwd))->row();
		if (!is_null($selectedData)) {
				$selectedData->type = true;
				$data["UserData"] = $selectedData;
				$data["status"]=true;
				$data["url"] = "session/login.php";
			}
		return $data;
	}
	public function checkLogin()
	{
		$dataFilter = $this->db->get_where('user',$this->input->post())->row();
		$data["aoUserData"] = "?UserData=".json_encode($dataFilter);
		$data["status"] = $dataFilter->status;
		$data["url"] = "";
		if ($dataFilter->status==true) {
			$data["url"] = "session/login.php";
		}
		return $data;
	}
	public function get()
	{
		$data['user'] = $this->db->get('user')->result();
		return $data;
	}
	public function save()
	{
		$post = $this->input->post();
		// $post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		// $post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		// $post['last_updated_time'] = date("Y-m-d H:i:s");
		// $post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('user');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('user',$post);
		return $data;
	}
}
