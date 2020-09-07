<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportDataController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('importDataModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('pre_primary_master',TRUE);
        }

	public function get()
	{
		echo json_encode($this->importDataModel->get());
	}
	public function getTableFields()
	{
		echo json_encode($this->importDataModel->getTableFields());
	}
	public function saveSettings()
	{
		echo json_encode($this->importDataModel->saveSettings());
	}
	public function downloadSampleFormat()
	{
		echo json_encode($this->importDataModel->downloadSampleFormat());
	}
	public function importFromFile()
	{
		echo json_encode($this->importDataModel->importFromFile());
	}
	public function edit()
	{
		echo json_encode($this->importDataModel->edit());
	}
	public function update()
	{
		echo json_encode($this->importDataModel->update());
	}
	public function delete()
	{
		echo json_encode($this->importDataModel->delete());
	}
}
