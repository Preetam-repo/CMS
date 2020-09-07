<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class AoWebsiteController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('aoWebsiteModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db = $this->load->database('ao_website_master',TRUE);
	            error_reporting(0);
        }

	public function getUsers()
	{
		echo json_encode($this->aoWebsiteModel->getUsers());
	}
	public function signin()
	{
		echo json_encode($this->aoWebsiteModel->signin());
	}
	public function signup()
	{
		echo json_encode($this->aoWebsiteModel->signup());
	}
	public function getWebsiteContactUs()
	{
		echo json_encode($this->aoWebsiteModel->getWebsiteContactUs());
	}
	public function deleteCategory()
	{
		echo json_encode($this->aoWebsiteModel->deleteCategory());
	}
	public function editCategory()
	{
		echo json_encode($this->aoWebsiteModel->editCategory());
	}
	public function getWebsiteNewsletterSubscription()
	{
		echo json_encode($this->aoWebsiteModel->getWebsiteNewsletterSubscription());
	}
	public function getWebPages()
	{
		echo json_encode($this->aoWebsiteModel->getWebPages());
	}
	public function updatePage()
	{
		echo json_encode($this->aoWebsiteModel->updatePage());
	}
	public function getSavedPage()
	{
		echo json_encode($this->aoWebsiteModel->getSavedPage());
	}
	public function getMainSubMenu()
	{
		echo json_encode($this->aoWebsiteModel->getMainSubMenu());
	}
	public function getChildMenu()
	{
		echo json_encode($this->aoWebsiteModel->getChildMenu());
	}
	public function saveChildMenu()
	{
		echo json_encode($this->aoWebsiteModel->saveChildMenu());
	}
	public function deleteChildMenu()
	{
		echo json_encode($this->aoWebsiteModel->deleteChildMenu());
	}
	public function getWebsiteSilder()
	{
		echo json_encode($this->aoWebsiteModel->getWebsiteSilder());
	}
	public function deleteSlider()
	{
		echo json_encode($this->aoWebsiteModel->deleteSlider());
	}
	public function saveWebsiteSilder()
	{
		echo json_encode($this->aoWebsiteModel->saveWebsiteSilder());
	}
	public function getMainMenu()
	{
		echo json_encode($this->aoWebsiteModel->getMainMenu());
	}
	public function saveMainMenu()
	{
		echo json_encode($this->aoWebsiteModel->saveMainMenu());
	}
	public function getSubMenu()
	{
		echo json_encode($this->aoWebsiteModel->getSubMenu());
	}
	public function saveSubMenu()
	{
		echo json_encode($this->aoWebsiteModel->saveSubMenu());
	}
	public function get_website_info()
	{
		echo json_encode($this->aoWebsiteModel->get_website_info());
	}
	public function style_master()
	{
		echo json_encode($this->aoWebsiteModel->style_master());
	}
	public function save_info_preloader()
	{
		echo json_encode($this->aoWebsiteModel->save_info_preloader());
	}
	public function getWebsite()
	{
		echo json_encode($this->aoWebsiteModel->getWebsite());
	}
	public function getPage()
	{
		echo json_encode($this->aoWebsiteModel->getPage());
	}
	public function getStyles()
	{
		echo json_encode($this->aoWebsiteModel->getStyles());
	}
	public function saveStyles()
	{
		echo json_encode($this->aoWebsiteModel->saveStyles());
	}
	public function getData()
	{
		echo json_encode($this->aoWebsiteModel->getData());
	}
	public function saveData()
	{
		echo json_encode($this->aoWebsiteModel->saveData());
	}
	public function savePage()
	{
		echo json_encode($this->aoWebsiteModel->savePage());
	}
	public function getPages()
	{
		echo json_encode($this->aoWebsiteModel->getPages());
	}
	public function getAssignWebpage()
	{
		echo json_encode($this->aoWebsiteModel->getAssignWebpage());
	}
	public function viewAssignWebpage()
	{
		echo json_encode($this->aoWebsiteModel->viewAssignWebpage());
	}
	public function saveAssignWebpage()
	{
		echo json_encode($this->aoWebsiteModel->saveAssignWebpage());
	}
	
}
