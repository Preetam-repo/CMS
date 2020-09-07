<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteModel extends CI_Model {

	public function getWebsiteSilder()
	{
		$data['websiteSilder'] = $this->db->get('slider')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function getMainSubMenu()
	{
		$data['mainMenu'] = $this->db->get('main_menu')->result();
		$data['subMenu'] = $this->db->get('sub_menu')->result();
		$data['order'] = null;
		return $data;
	}
	public function getChildMenu()
	{
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		if (!is_null($id)) {
			$this->db->where("id",$id);
			$data['menu'] = $this->db->get("child_menu_view")->result();
			return $data;
		}
		$data['websiteChildMenu'] = $this->db->get("child_menu_view")->result();
		$data['order'] = null;
		return $data;
	}
	public function signin()
	{
		$post = $this->input->post();
		$data ["status"] =false;
		$this->db->group_start();
		$this->db->or_where("email",$post["username"]);
		$this->db->or_where("mobile",$post["username"]);
		$this->db->group_end();
		$this->db->where("password",$post["password"]);
		$filter = $this->db->get('websiteUsers')->row();
		if ($filter!=null) {
		$data ["status"]=true;
		$data ["url"] = "session/signin.php?UserData=".json_encode($filter);
		}
		return $data;
	}
	public function signup()
	{
		$post = $this->input->post();
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$data = $this->db->insert('websiteUsers',$post);
		return $data;
	}
	public function saveChildMenu()
	{
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
	public function alterTable()
	{
		$this->db->where("location","Banner");
		$data['banner'] = $this->db->get('slider')->result();
		return $data;
	}
	public function sendNewsletter()
	{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('newletter_subscription',$post);
		return $data;
		
	}
	public function sendQuery()
	{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$data = $this->db->insert('contact_us',$post);
		return $data;
	}
	public function getWebsiteContactUs()
	{
		$data['websiteContactUs'] = $this->db->get('contact_us')->result();
		$data['order'] = null;
		return $data;
	}
	public function getWebsiteNewsletterSubscription()
	{
		$data['newsletterSubscription'] = $this->db->get('newletter_subscription')->result();
		$data['order'] = null;
		return $data;
	}
	public function saveWebsiteSilder()
	{
		$post = $this->input->post();
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
			if ($this->uploadImage($_FILES[$fileName],"../uploads/slider/")) {
				$data = $this->db->insert('slider',$post);
				return $data;
		    }
		}
				return false;
	}
	public function getMainMenu()
	{
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		if (!is_null($id)) {
			$this->db->where("id",$id);
			$data['menu'] = $this->db->get("main_menu")->result();
			return $data;
		}
		$data['websiteMainMenu'] = $this->db->get('main_menu')->result();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function saveMainMenu()
	{
		$post = $this->input->post();
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		if (!is_null($id)) {
			$this->db->where("main_menu.id",$id);
			$data = $this->db->update("main_menu",$post);
			return $data;
		}
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$data = $this->db->insert('main_menu',$post);
		return $data;
	}
	public function getSubMenu()
	{
		$this->db->select('sub_menu.*,main_menu.main_menu');
		$this->db->join('main_menu','sub_menu.main_menu_id = main_menu.id');
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		if (!is_null($id)) {
			$this->db->where("sub_menu.id",$id);
			$data['menu'] = $this->db->get("sub_menu")->result();
			return $data;
		}
		$data['websiteSubMenu'] = $this->db->get("sub_menu")->result_array();
		$data['order'] = $this->db->get_where('visible',$this->input->post())->row();
		return $data;
	}
	public function saveSubMenu()
	{
		$post = $this->input->post();
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$id = ($this->input->post("id")!=null)?$this->input->post("id"):null;
		if (!is_null($id)) {
			$this->db->where("sub_menu.id",$id);
			$data = $this->db->update("sub_menu",$post);
			return $data;
		}
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$data = $this->db->insert('sub_menu',$post);
		return $data;
	}
	public function get_website_info()
	{
		$data = $this->db->get_where('style_master',$this->input->post())->row();
		$data->preloader = $this->db->get('preloader')->result();
		return $data;
	}
	public function style_master()
	{
		$post = $this->input->post();
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
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
		// print_r($post);die;
		$postData = array(
			'site_info' => json_encode($post["site_info"]),
			'contacts' => json_encode($post["contacts"]),
			'social_links' => json_encode($post["social_links"]),
			'style_master' => json_encode($post["style_master"]),
			'email_notifications' => json_encode($post["email_notifications"]),
			'newsletter' => json_encode($post["newsletter"]),
			'website_status' => json_encode($post["website_status"]),
		);
		// $this->db->where("aoId",$post['aoId']);
		$data = $this->db->update('style_master',$postData);
		return $data;
		if ($data==false) {
		$data = $this->db->insert('style_master',$post);
		}
	}
	public function uploadImages($file="",$key="")
	{
		$target_dir = "../uploads/";
		$uploadOk = 1;
		$target_file = $target_dir . time() . basename($file["name"][$key]);
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
	public function save_info_preloader()
	{
		$post = $this->input->post();
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
		$getStyle_master = $this->db->get_where('style_master')->row();
		$postData["site_info"] = json_decode($getStyle_master->site_info);
		$postData["site_info"]->preloader = $post["site_info"]["preloader"];
		$postData["site_info"] = json_encode($postData["site_info"]);
		$postData['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$postData['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$postData['last_updated_time'] = date("Y-m-d H:i:s");
		$postData['created_time'] = date("Y-m-d H:i:s");
		// print_r($postData);die;
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
	public function deleteMainMenu()
	{
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("main_menu");
	}
	public function deleteCategory()
	{
		$page = $this->input->post("page");
		$category = $this->input->post("category");
		$this->db->where($page."Category",$category);
		return $this->db->delete($page);
	}
	public function editCategory()
	{
		extract($this->input->post());
		$this->db->where($page."Category",$category);
		$update = array($page."Category" => $renamecategory);
		return $this->db->update($page,$update);
	}
	public function deleteSlider()
	{
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("slider");
	}
	public function deleteSubMenu()
	{
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("sub_menu");
	}
	public function deleteChildMenu()
	{
		$id = $this->input->post("id");
		$this->db->where("id",$id);
		return $this->db->delete("child_menu");
	}
	public function getWebsite()
	{
		$data['style_master'] = $this->db->get('style_master')->row();
		$this->db->order_by('srn', 'ASC');
		$this->db->where("location","Banner");
		$data['banner'] = $this->db->get('slider')->result();
		$data['sectionstyle'] = $this->db->get('sectionstyle')->row();
		$this->db->order_by('srn', 'ASC');
		$data['main_menu'] = $this->db->get('main_menu')->result();
		$this->db->order_by('srn', 'ASC');
		$data['sub_menu'] = $this->db->get('sub_menu')->result();
		$this->db->order_by('srn', 'ASC');
		$data['child_menu'] = $this->db->get('child_menu')->result();
		$this->db->order_by('srn', 'ASC');
		$data['services'] = $this->db->get('services')->result();
		$this->db->order_by('srn', 'ASC');
		$data['features'] = $this->db->get('features')->result();
		$this->db->order_by('srn', 'ASC');
		$data['teams'] = $this->db->get('team')->result();
		$this->db->order_by('srn', 'ASC');
		$data['articles'] = $this->db->get('articles')->result();
		$this->db->order_by('srn', 'ASC');
		$data['clienttestimonial'] = $this->db->get('clienttestimonial')->result();
		$this->db->order_by('srn', 'ASC');
		$data['client'] = $this->db->get('client')->result();
		$this->db->order_by('srn', 'ASC');
		$data['counter'] = $this->db->get('counter')->result();
		$this->db->order_by('srn', 'ASC');
		$data['faq'] = $this->db->get('faq')->result();
		// $data['countdowntimer'] = $this->db->get_where('countdowntimer')->result();
		return $data;
	}
	public function getPage()
	{
		$data['page'] = $this->db->get_where('webpage',array('link' => $this->input->post("page")))->row();
		$data['style_master'] = $this->db->get('style_master')->row();
		$this->db->order_by('srn', 'ASC');
		$data['main_menu'] = $this->db->get('main_menu')->result();
		$this->db->order_by('srn', 'ASC');
		$data['sub_menu'] = $this->db->get('sub_menu')->result();
		$data['status'] = false;
		if ($data['page']->status==true) {
			$data['status'] = true;
		}
		return $data;
	}
}