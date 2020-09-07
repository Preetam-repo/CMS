<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsitePageModel extends CI_Model {

	public function saveStyles()
		{
			$post = $this->input->post();
			foreach ($_FILES as $key => $value) {
				if (!empty($value["name"]["img"])) {
					$post[$key]["img"] = 'uploads/'.$value["name"]["img"];
				if (!($this->uploadImage($value))) {
					return $this->uploadImage($value);
				}
				}
			}
			$post['created_date'] = date("Y-m-d H:i:s");
			$post['services'] = json_encode($post['services']);
			$post['features'] = json_encode($post['features']);
			$post['articles'] = json_encode($post['articles']);
			$post['latest_infn'] = json_encode($post['latest_infn']);
			$post['teams'] = json_encode($post['teams']);
			$post['client_testimonials'] = json_encode($post['client_testimonials']);
			$post['client'] = json_encode($post['client']);
			$post['pricing_table'] = json_encode($post['pricing_table']);
			$post['counter'] = json_encode($post['counter']);
			$post['countdown_timer'] = json_encode($post['countdown_timer']);
			$post['faq'] = json_encode($post['faq']);
			$post['contact'] = json_encode($post['contact']);
			$data = $this->db->update('sectionstyle',$post);
			return $data;
			}
	public function uploadImage($file="")
		{
		$target_dir = "../uploads/";
		$uploadOk = 1;
		$target_file = $target_dir . basename($file["name"]["img"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check file size
		if ($file["size"]["img"] > 1048576) {
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			return $uploadOk;
		// if everything is ok, try to upload file
		} else {
			return (move_uploaded_file($file["tmp_name"]["img"], $target_file));
		}
		}
	public function uploadImages($file="")
		{
		$target_dir = "../uploads/";
		$uploadOk = 1;
		$target_file = $target_dir . time() . basename($file["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check file size
		if ($file["size"] > 1048576) {
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			return $uploadOk;
		// if everything is ok, try to upload file
		} else {
			return (move_uploaded_file($file["tmp_name"], $target_file));
		}
		}
	public function getStyles()
		{
		$data = $this->db->get_where("sectionstyle",$this->input->post())->row();
		return $data;
		}
	public function getData()
		{
		$data['sections'] = $this->db->get($this->input->post("page"));
		if ($data['sections']!=false) {
		$data['sections']=$data['sections']->result();
		}
		$data['order'] = null;
		return $data;
		}
	public function deleteData()
		{
			$id = $this->input->post("id");
			$table = $this->input->post("page");
			$this->db->where("id",$id);
			return $this->db->delete($table);
		}
	public function deleteAssignWebpage()
		{
			$id = $this->input->post("id");
			$this->db->where("id",$id);
			return $this->db->delete("assign_webpage_menu");
		}
	public function deletePage()
		{
			$id = $this->input->post("id");
			$this->db->where("id",$id);
			return $this->db->delete("webpage");
		}
	public function saveData()
		{
		$post = $this->input->post();
		$post['created_date'] = date("Y-m-d H:i:s");
		$action = $post["action"];
		unset($post["action"]);
		foreach ($_FILES as $key => $value) {
			if (!empty($value["name"])) {
				$post[$key] = 'uploads/'.time().$value["name"];
			if (!($this->uploadImages($value))) {
				return false;
				}
			}
		}
		// print_r($post);die;
/*		$fields = $this->db->list_fields($action);
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}*/
		// print_r($post);die;
		$data = $this->db->insert($action,$post);
		return $data;
		}
	public function savePage()
		{
		$post = $this->input->post();
		// $post["content"] = htmlentities($post["content"]);
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('webpage');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('webpage',$post);
		return $data;
		}
	public function updatePage()
		{
		$post = $this->input->post();
		// $post["content"] = htmlentities($post["content"]);
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('webpage');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$this->db->where("id",$post["id"]);
		unset($post["id"]);
		$data = $this->db->update('webpage',$post);
		return $data;
		}
	public function getPage()
		{
		$data['webpage'] = $this->db->get('webpage')->result();
		$data['order'] = null;
		return $data;
		}
	public function getSavedPage()
		{
		$data = $this->db->get_where('webpage',$this->input->post())->row();
		return $data;
		}
	public function viewAssignWebpage()
		{
		$data['assign_webpage_view'] = $this->db->get('assign_webpage_view')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
		}
	public function getAssignWebpage()
		{
		$data['mainMenu'] = $this->db->get('main_menu')->result();
		$data['subMenu'] = $this->db->get('sub_menu')->result();
		$data['webPage'] = $this->db->get('webpage')->result();
		return $data;
		}
	public function saveAssignWebpage()
		{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('assign_webpage_menu');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('assign_webpage_menu',$post);
		return $data;
		}
}
