<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrePrimaryController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('prePrimaryModel');
                date_default_timezone_set("Asia/Kolkata");
                $this->db =$this->load->database('pre_primary_master',TRUE);
	            error_reporting(0);
        }

    public function get()
    {
        echo json_encode($this->prePrimaryModel->get());
    }
    public function getSelects()
    {
		echo json_encode($this->prePrimaryModel->getSelects());
    }
    public function save()
    {
        echo json_encode($this->prePrimaryModel->save());
    }
}