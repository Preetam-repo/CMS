<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsitePageController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('websitePageModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('website_master',TRUE);
	            error_reporting(0);
        }
	public function getStyles()
	{
		echo json_encode($this->websitePageModel->getStyles());
	}
	public function saveStyles()
	{
		echo json_encode($this->websitePageModel->saveStyles());
	}
	public function getData()
	{
		echo json_encode($this->websitePageModel->getData());
	}
	public function saveData()
	{
		echo json_encode($this->websitePageModel->saveData());
	}
	public function deleteData()
	{
		echo json_encode($this->websitePageModel->deleteData());
	}
	public function deleteAssignWebpage()
	{
		echo json_encode($this->websitePageModel->deleteAssignWebpage());
	}
	public function savePage()
	{
		echo json_encode($this->websitePageModel->savePage());
	}
	public function deletePage()
	{
		echo json_encode($this->websitePageModel->deletePage());
	}
	public function getPage()
	{
		echo json_encode($this->websitePageModel->getPage());
	}
	public function getAssignWebpage()
	{
		echo json_encode($this->websitePageModel->getAssignWebpage());
	}
	public function viewAssignWebpage()
	{
		echo json_encode($this->websitePageModel->viewAssignWebpage());
	}
	public function saveAssignWebpage()
	{
		echo json_encode($this->websitePageModel->saveAssignWebpage());
	}
	public function getSavedPage()
	{
		echo json_encode($this->websitePageModel->getSavedPage());
	}
	public function updatePage()
	{
		echo json_encode($this->websitePageModel->updatePage());
	}
}
