<?php
class TableModel extends CI_Model{
	public function saveVisibleState()
	{
		$data = $this->input->post();
		$data['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$data['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$data['last_updated_time'] = date("Y-m-d H:i:s");
		$data['created_time'] = date("Y-m-d H:i:s");
		extract($this->input->post());
		$old = array('page' => $page,'userId' =>$userId);
		$oldData = $this->db->get_where('visible',$old)->row();
		if (!$oldData) {
			$this->db->insert('visible',$data);
		}else{
			$this->db->where('page',$data['page']);	
			$this->db->where('userId',$data['userId']);	
			$this->db->update('visible',$data);
			}
	}
	public function tableVis()
	{
		return $this->db->get_where('visible',array('page' => 'facilityMaster'))->row();		
	}
	public function getTable()
	{
		return $this->db->get($_POST['action'])->result_array();		
	}

}