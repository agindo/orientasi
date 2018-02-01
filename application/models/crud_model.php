<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function get_by_id($id, $table)
	{
		$this->db->from($table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data, $table)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id, $table)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

}
