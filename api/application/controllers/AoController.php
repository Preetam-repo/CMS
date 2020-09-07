<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class AoController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('aoModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('ao_master',TRUE);
        }

	public function checkId()
	{
		echo json_encode($this->aoModel->checkId());
	}
	public function loginSuper()
	{
        $this->db1 =$this->load->database('admin_master',TRUE);
		echo json_encode($this->aoModel->loginSuper());
	}
	public function checkLogin()
	{
		echo json_encode($this->aoModel->checkLogin());
	}
	public function checkUrl()
	{
		echo json_encode($this->aoModel->checkUrl());
	}
	public function save()
	{
		echo json_encode($this->aoModel->save());
	}
	public function get()
	{
		echo json_encode($this->aoModel->get());
	}
	public function edit()
	{
		echo json_encode($this->aoModel->edit());
	}
	public function update()
	{
		echo json_encode($this->aoModel->update());
	}
	public function delete()
	{
		echo json_encode($this->aoModel->delete());
	}
}
