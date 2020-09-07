<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AoWebsiteModel extends CI_Model {
	public function sendNewsletter(){
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('newletter_subscription',$post);
		return $data;
	}
	public function sendQuery(){
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('contact_us',$post);
		return $data;
	}
	public function getWebsiteContactUs(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['websiteContactUs'] = $this->db->get('contact_us')->result();
		$data['order'] = null;
		return $data;
	}
	public function getWebsiteNewsletterSubscription(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['newsletterSubscription'] = $this->db->get('newletter_subscription')->result();
		$data['order'] = null;
		return $data;
	}
	public function getMainSubMenu(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['mainMenu'] = $this->db->get('main_menu')->result();
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['subMenu'] = $this->db->get('sub_menu')->result();
		$data['order'] = null;
		return $data;
	}
	public function getChildMenu(){
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		$this->db->where("aoId",$this->input->post("aoId"));
		if (!is_null($id)) {
			$this->db->where("id",$id);
			$data['menu'] = $this->db->get("child_menu_view")->result();
			return $data;
	}
		$data['websiteChildMenu'] = $this->db->get("child_menu_view")->result();
		$data['order'] = null;
		return $data;
	}
	public function saveChildMenu(){
		$post = $this->input->post();
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		if (!is_null($id)) {
			$this->db->where("child_menu.id",$id);
			$data = $this->db->update("child_menu",$post);
			return $data;
	}
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$data = $this->db->insert('child_menu',$post);
		return $data;
	}
	public function deleteChildMenu(){
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("child_menu");
	}
	public function deleteSlider(){
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("slider");
	}
	public function getWebsiteSilder(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['websiteSilder'] = $this->db->get('slider')->result();
		$data['order'] = null;
		return $data;
	}
	public function saveWebsiteSilder(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('slider');
		$fileName="imageUpload";
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($value!=$fileName)&&(isset($_FILES[$fileName]['tmp_name']) && !empty($_FILES[$fileName]['tmp_name']))&&($post[$value]=="")) {
				return $value;
		}
	}
			if (isset($_FILES[$fileName]['tmp_name']) && !empty($_FILES[$fileName]['tmp_name'])) {
				$data[$fileName]=basename($_FILES[$fileName]["name"]);
				$post[$fileName] = $data[$fileName];
		// print_r($post);die;
				$_FILES[$fileName]["name"]=$data[$fileName];
			if (!$this->uploadImage($_FILES[$fileName],"../uploads/slider/")) {
				return false;
	}
	}
		$data = $this->db->insert('slider',$post);
		return $data;
	}
	public function getMainMenu(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['websiteMainMenu'] = $this->db->get('main_menu')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function saveMainMenu(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('main_menu',$post);
		return $data;
	}
	public function getSubMenu(){
		$this->db->select('sub_menu.*,main_menu.main_menu');
		$this->db->from("sub_menu");
		$this->db->join('main_menu','sub_menu.main_menu_id = main_menu.id');
		$this->db->where("sub_menu.aoId",$this->input->post("aoId"));
		$data['websiteSubMenu'] = $this->db->get()->result_array();
		$data['order'] = null;
		return $data;
	}
	public function saveSubMenu(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('sub_menu',$post);
		return $data;
	}
	public function get_website_info(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data = $this->db->get('style_master')->row();
		$this->db->where("aoId",$this->input->post("aoId"));
		$data->preloader = $this->db->get('preloader')->result();
		return $data;
	}
	public function style_master(){
		$post = $this->input->post();
		foreach ($_FILES as $key => $value) {
			foreach ($_FILES[$key]["name"] as $keys => $values) {
			if (!empty($values)) {
				$post[$key][$keys] = 'uploads/'. time() .$values;
			if (!($this->uploadImages($value,$keys))) {
				return false;
			}
		}
		}
	}
		$postData = array(
			'site_info' => json_encode($post["site_info"]),
			'contacts' => json_encode($post["contacts"]),
			'social_links' => json_encode($post["social_links"]),
			'style_master' => json_encode($post["style_master"]),
			'email_notifications' => json_encode($post["email_notifications"]),
			'newsletter' => json_encode($post["newsletter"]),
			'website_status' => json_encode($post["website_status"]),
		);
		$postData["aoId"] = $this->input->post("aoId");
		$postData['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$postData['last_updated_time'] = date("Y-m-d H:i:s");
		$this->db->where("aoId",$post["aoId"]);
		$check = $this->db->get('style_master')->row();
		// print_r((empty($check)));die;
		if (empty($check)==true) {
		$postData['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$postData['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('style_master',$postData);
		return $data;
	}
		$this->db->where("aoId",$post["aoId"]);
		$data = $this->db->update('style_master',$postData);
		return $data;
	}
	public function uploadImages($file="",$key="")
	{
		$target_dir = "../uploads/";
		$uploadOk = 1;
		$target_file = $target_dir . time() . basename($file["name"][$key]);
		// print_r($target_file);die;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check file size
		if ($file["size"][$key] > 1048576) {
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
			return (move_uploaded_file($file["tmp_name"][$key], $target_file));
	}
	}
	public function save_info_preloader(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		if (isset($_FILES["preloader"]['tmp_name']) && !empty($_FILES["preloader"]['tmp_name'])) {
				$data["preloader"]=basename($_FILES["preloader"]["name"]);
				$post["preloader"] = $data["preloader"];
				$_FILES["preloader"]["name"]=$data["preloader"];
				// print_r($post);die;
			if ($this->uploadImage($_FILES["preloader"],"../uploads/preloader/")) {
				return $this->db->insert('preloader',$post);
	} else {
				return false;
	}
	}
		$this->db->where("aoId",$this->input->post("aoId"));
		$getStyle_master = $this->db->get('style_master')->row();
		$postData["aoId"] = $this->input->post("aoId");
		$postData["site_info"] = json_decode($getStyle_master->site_info);
		$postData["site_info"]->preloader = $post["site_info"]["preloader"];
		$postData["site_info"] = json_encode($postData["site_info"]);
		$postData['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$postData['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$postData['last_updated_time'] = date("Y-m-d H:i:s");
		$postData['created_time'] = date("Y-m-d H:i:s");
		$this->db->where("aoId",$this->input->post("aoId"));
		$data = $this->db->update('style_master',$postData);
		return $data;
	}
	public function uploadImage($file="",$path="../uploads/")
	{
		$target_dir = $path;
		$uploadOk = 1;
		$target_file = $target_dir . basename($file["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check file size
		if ($file["size"] > 1048576) {
		$uploadOk = 0;
	}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && $imageFileType != "ico" && $imageFileType != "svg" ) {
		$uploadOk = 0;
	}
	if (file_exists($target_file)) {
	$uploadOk = 0;
	}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			return $uploadOk;
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($file["tmp_name"], $target_file)) {
			return true;
	} else {
			return false;
	}
	}
	}
	public function getWebsite(){
		$post = $this->input->post();
		$where = array('aoId' => $post["aoId"]);
		$data['style_master'] = $this->db->get_where('style_master',$where)->row();
		$this->db->where("location","banner");
		$this->db->order_by('srn', 'ASC');
		$data['banner'] = $this->db->get_where('slider',$where)->result();
		$data['sectionstyle'] = $this->db->get_where('sectionstyle',$where)->row();
		$this->db->order_by('srn', 'ASC');
		$data['main_menu'] = $this->db->get_where('main_menu',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['sub_menu'] = $this->db->get_where('sub_menu',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['child_menu'] = $this->db->get_where('child_menu',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['services'] = $this->db->get_where('services',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['features'] = $this->db->get_where('features',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['teams'] = $this->db->get_where('team',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['articles'] = $this->db->get_where('articles',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['clienttestimonial'] = $this->db->get_where('clienttestimonial',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['client'] = $this->db->get_where('client',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['counter'] = $this->db->get_where('counter',$where)->result();
		$this->db->order_by('srn', 'ASC');
		$data['faq'] = $this->db->get_where('faq',$where)->result();
		// $data['countdowntimer'] = $this->db->get_where('countdowntimer',array('aoId' =>$aoId))->result();
		return $data;
	}
	public function getWebPages(){
		$aoId = $this->input->post("aoId");
		$this->db->where("aoId",$aoId);
		$data['webpage'] = $this->db->get('webpage')->result();
		$data['order'] = null;
		return $data;
	}
	public function getPage(){
		$aoId = $this->input->post("aoId");
		$data['page'] = $this->db->get_where('webpage',array('aoId' => $this->input->post("aoId"), 'link' => $this->input->post("page")))->row();
		$data['style_master'] = $this->db->get_where('style_master',array('aoId' =>$this->input->post("aoId")))->row();
		$data['main_menu'] = $this->db->get_where('main_menu',array('aoId' =>$this->input->post("aoId")))->result();
		$data['sub_menu'] = $this->db->get_where('sub_menu',array('aoId' =>$this->input->post("aoId")))->result();
		$data['child_menu'] = $this->db->get_where('child_menu_view',array('aoId' =>$this->input->post("aoId")))->result();
		$data['status'] = false;
		if ($data['page']->status==true) {
			$data['status'] = true;
	}
		return $data;
	}
	public function saveStyles(){
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
			$this->db->where("aoId",$post['aoId']);
			$check = $this->db->get("sectionstyle")->row();
			if (empty($check)) {
			$data = $this->db->insert('sectionstyle',$post);
			return $data;
		}
			$this->db->where("aoId",$post['aoId']);
			$data = $this->db->update('sectionstyle',$post);
			return $data;
		}
	public function uploadImagess($file="")
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
	public function getStyles(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data = $this->db->get("sectionstyle")->row();
		return $data;
	}
	public function getData(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['sections'] = $this->db->get($this->input->post("page"));
		if ($data['sections']!=false) {
		$data['sections']=$data['sections']->result();
	}
		$data['order'] = null;
		return $data;
	}
	public function deleteCategory(){
			$page = $this->input->post("page");
			$category = $this->input->post("category");
			$aoId = $this->input->post("aoId");
			$this->db->where("aoId",$aoId);
			$this->db->where($page."Category",$category);
			return $this->db->delete($page);
	}
	public function editCategory(){
		extract($this->input->post());
		$this->db->where("aoId",$aoId);
		$this->db->where($page."Category",$category);
		$update = array($page."Category" => $renamecategory);
		return $this->db->update($page,$update);
	}
	public function saveData(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		$post['created_date'] = date("Y-m-d H:i:s");
		$action = $post["action"];
		unset($post["action"]);
		foreach ($_FILES as $key => $value) {
			if (!empty($value["name"]["img"])) {
				$post[$key] = 'uploads/'.$value["name"]["img"];
			if (!($this->uploadImagess($value))) {
				return false;
			}
		}
	}
		// print_r($post);die;
		// $fields = $this->db->list_fields($action);
		// foreach ($fields as $key => $value) {
			// 	if (($value!="id")&&($post[$value]=="")) {
				// 		return $value;
			// 	}
		// }
		$data = $this->db->insert($action,$post);
		return $data;
	}
	public function savePage(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('webpage');
		// foreach ($fields as $key => $value) {
			// 	if (($value!="id")&&($post[$value]=="")) {
				// 		return $value;
			// 	}
		// }
		$data = $this->db->insert('webpage',$post);
		return $data;
	}
	public function getPages(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['webpage'] = $this->db->get('webpage')->result();
		$data['order'] = null;
		return $data;
	}
	public function updatePage(){
		$post = $this->input->post();
		// $post["content"] = htmlentities($post["content"]);
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('webpage');
		$this->db->where("id",$post["id"]);
		unset($post["id"]);
		$data = $this->db->update('webpage',$post);
		return $data;
	}
	public function getSavedPage(){
		$data = $this->db->get_where('webpage',$this->input->post())->row();
		return $data;
	}
	public function viewAssignWebpage(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['assign_webpage_view'] = $this->db->get('assign_webpage_view')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function getAssignWebpage(){
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['mainMenu'] = $this->db->get('main_menu')->result();
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['subMenu'] = $this->db->get('sub_menu')->result();
		$this->db->where("aoId",$this->input->post("aoId"));
		$data['webPage'] = $this->db->get('webpage')->result();
		return $data;
	}
	public function saveAssignWebpage(){
		$post = $this->input->post();
		$post["aoId"] = $this->input->post("aoId");
		$post["aoId"] = $this->input->post("aoId");
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
	public function getUsers(){
		$data['user'] = $this->db->get_where('websiteUsers',$this->input->post())->result();
		return $data;
	}
	public function signin(){
		$post = $this->input->post();
		$data ["status"] =false;
		$this->db->where("aoId",$post["aoId"]);
		$this->db->group_start();
		$this->db->or_where("email",$post["username"]);
		$this->db->or_where("mobile",$post["username"]);
		$this->db->group_end();
		$this->db->where("password",$post["password"]);
		$filter = $this->db->get('websiteUsers')->row();
		if ($filter!=null) {
		$data ["status"]=true;
		$data ["url"] = "session/aosignin.php?UserData=".json_encode($filter);
	}
		return $data;
	}
	public function signup(){
		$post = $this->input->post();
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$data = $this->db->insert('websiteUsers',$post);
		return $data;
	}
}