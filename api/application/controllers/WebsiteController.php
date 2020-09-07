<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('websiteModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('website_master',TRUE);
	            error_reporting(0);
        }

	public function getMainSubMenu()
	{
		echo json_encode($this->websiteModel->getMainSubMenu());
	}
	public function getChildMenu()
	{
		echo json_encode($this->websiteModel->getChildMenu());
	}
	public function deleteCategory()
	{
		echo json_encode($this->websiteModel->deleteCategory());
	}
	public function editCategory()
	{
		echo json_encode($this->websiteModel->editCategory());
	}
	public function deleteChildMenu()
	{
		echo json_encode($this->websiteModel->deleteChildMenu());
	}
	public function saveChildMenu()
	{
		echo json_encode($this->websiteModel->saveChildMenu());
	}
	public function getWebsiteSilder()
	{
		echo json_encode($this->websiteModel->getWebsiteSilder());
	}
	public function deleteSlider()
	{
		echo json_encode($this->websiteModel->deleteSlider());
	}
	public function alterTable()
	{
		print_r($this->websiteModel->alterTable());
		// $this->load->dbutil();
		// $this->load->library('zip');
		// $this->zip->add_data("mysql.sql",$this->websiteModel->alterTable());
		// $this->zip->download('my_backup.zip');
	}
	public function saveWebsiteSilder()
	{
		echo json_encode($this->websiteModel->saveWebsiteSilder());
	}
	public function getMainMenu()
	{
		echo json_encode($this->websiteModel->getMainMenu());
	}
	public function getWebsiteContactUs()
	{
		echo json_encode($this->websiteModel->getWebsiteContactUs());
	}
	public function getWebsiteNewsletterSubscription()
	{
		echo json_encode($this->websiteModel->getWebsiteNewsletterSubscription());
	}
	public function saveMainMenu()
	{
		echo json_encode($this->websiteModel->saveMainMenu());
	}
	public function deleteMainMenu()
	{
		echo json_encode($this->websiteModel->deleteMainMenu());
	}
	public function deleteSubMenu()
	{
		echo json_encode($this->websiteModel->deleteSubMenu());
	}
	public function getSubMenu()
	{
		echo json_encode($this->websiteModel->getSubMenu());
	}
	public function saveSubMenu()
	{
		echo json_encode($this->websiteModel->saveSubMenu());
	}
	public function get_website_info()
	{
		echo json_encode($this->websiteModel->get_website_info());
	}
	public function style_master()
	{
		echo json_encode($this->websiteModel->style_master());
	}
	public function save_info_preloader()
	{
		echo json_encode($this->websiteModel->save_info_preloader());
	}
	public function getWebsite()
	{
		echo json_encode($this->websiteModel->getWebsite());
	}
	public function getPage()
	{
		echo json_encode($this->websiteModel->getPage());
	}
	public function sendNewsletter()
	{
		echo json_encode($this->websiteModel->sendNewsletter());
	}
	public function sendQuery()
	{
		echo json_encode($this->websiteModel->sendQuery());
	}
	public function signup()
	{
		echo json_encode($this->websiteModel->signup());		
	}
	public function signin()
	{
		echo json_encode($this->websiteModel->signin());		
	}
	
}
