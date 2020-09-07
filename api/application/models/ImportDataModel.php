<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportDataModel extends CI_Model {

	public function get()
	{
		$data['importsettings'] = $this->db->get('importsettings')->result();
		$data['order'] = null;
		return $data;
	}
	public function saveSettings()
	{
		$post = $this->input->post();
		$sampleFormat = json_decode($post["sampleFormat"]);
		$finalFormat;
		$index = -1;
		$index1 = 0;
		$finalFormat;
		foreach ($sampleFormat as $key => $value) {
			if (($index+1)%3==0) {
				$finalFormat[$index1][0] = $sampleFormat->$key;
			}
			if (($index)%3==1) {
				$finalFormat[$index1][2] = $sampleFormat->$key;
			}
			if (($index)%3==0) {
				$finalFormat[$index1][1] = $sampleFormat->$key;
			}
			if ($index%3==1) {
				$index1++;
			}
			$index++;
		}
		$post["sampleFormat"] = json_encode($finalFormat);
		$post['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$post['last_updated_time'] = date("Y-m-d H:i:s");
		$post['created_time'] = date("Y-m-d H:i:s");
		$fields = $this->db->list_fields('importsettings');
		foreach ($fields as $key => $value) {
			if (($value!="id")&&($post[$value]=="")) {
				return $value;
			}
		}
		$data = $this->db->insert('importsettings',$post);
		return $data;
	}
	public function downloadSampleFormat()
	{
		$data = $this->db->get_where('importsettings',$this->input->post())->row();
		return $data;
	}
	public function importFromFile()
	{
		$post = $this->input->post();
		$fileData = json_decode($post["fileData"]);
		unset($post["fileData"]);
		$fileDataKeys;
		foreach (get_object_vars($fileData[0]) as $key => $value) {
			$fileDataKeys[] = $key;
		}
		$importsettings = $this->db->get_where('importsettings',$post)->row();
		$allTableFields = $this->db->field_data($importsettings->formName);
		$tableFields;
		foreach ($allTableFields as $key => $value) {
			$tableFields[] = $value->name;
		}
		$sampleFormat = json_decode($importsettings->sampleFormat);
		$i = (($importsettings->sampleType==0)?2:1);
		$j = (($importsettings->sampleType==0)?0:2);
		$sampleFormatFile;
		foreach ($sampleFormat as $key => $value) {
			if (!empty($value[$i])) {
				$sampleFormatFile[$value[$j]] = $value[$i];
			}
		}
		$filteredKeys = array_intersect($sampleFormatFile,$fileDataKeys);
		$filteredDataForInsert = [];
		$index = 0;
		foreach ($fileData as $key => $value) {
			foreach ($filteredKeys as $keys =>$val) {
					$tableKey = $keys;
					$filteredDataForInsert[$index][$tableKey] = $value->$val;
				}
		$filteredDataForInsert[$index]['created_ip'] = $_SERVER['REMOTE_ADDR'];
		$filteredDataForInsert[$index]['last_updated_ip'] = $_SERVER['REMOTE_ADDR'];
		$filteredDataForInsert[$index]['last_updated_time'] = date("Y-m-d H:i:s");
		$filteredDataForInsert[$index]['created_time'] = date("Y-m-d H:i:s");
			$index++;
			}
		foreach ($filteredDataForInsert as $key => $value) {
			$data = $this->db->insert($importsettings->formName,$value);
		};
		return $data;
			}
	public function edit()
	{
		$data['importsettings'] = $this->db->get_where('importsettings',array("id"=>$_POST['id']))->row();
		return $data;
	}
	public function update()
	{
		$post = $this->input->post();
		unset($post["id"]);
		$this->db->where("id",$_POST['id']);
		$data = $this->db->update('importsettings',$post);
		return $data;
	}
	public function delete()
	{
		$this->db->where("id",$_POST['id']);	
		$data = $this->db->delete('importsettings');
		return $data;
	}
	public function getTableFields()
	{
		$data["fields"] = $this->db->field_data(substr($this->input->post("table"), 3));
		foreach ($data["fields"] as $key => $value) {
		if (($value->name=="id")||($value->name=="created_ip")||($value->name=="created_time")||($value->name=="last_updated_ip")||($value->name=="last_updated_time")) {
			unset($data["fields"][$key]);
		}
		}
		return $data;
	}
}
