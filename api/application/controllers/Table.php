<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Table extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('tableModel');
                date_default_timezone_set("Asia/Kolkata");
        }
	public function saveVisibleState()
	{
		$this->tableModel->saveVisibleState();
	}
	public function getTable()
	{
		if ($_POST['type']=="xml") {
			$array = $this->tableModel->getTable();
		echo $this->arrayToXml($array);
		}else{
		echo json_encode($this->tableModel->getTable());
		}
	}
}