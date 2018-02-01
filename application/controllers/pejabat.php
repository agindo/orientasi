<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pejabat extends CI_Controller {

	public function index()
	{
		$data['url'] = $this->uri->segment(1);
		$this->load->view('header');
		$this->load->view('pejabat');
		$this->load->view('footer', $data);
	}

	public function ajax_list()
	{
		$list = $this->pejabat_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kata) {
			$no++;
			$row = array();
			$row[] = "<p class='text-center' style='margin-bottom:0px'><small>".$no.".</small></p>";
			$row[] = $kata->nama_pejabat;
			$row[] = $kata->pangkat;
			$row[] = '<p class="text-center" style="margin-bottom:0px"><a href="javascript:void(0)" title="Edit" onclick="editData('."'".$kata->id."'".')"><i class="fa fa-edit"></i></a></p>';
			$row[] = '<p class="text-center" style="margin-bottom:0px"><a style="color:red" href="javascript:void(0)" title="Hapus" onclick="deleteData('."'".$kata->id."'".')"><i class="fa fa-remove"></i></a></p>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->pejabat_model->count_all(),
						"recordsFiltered" => $this->pejabat_model->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->crud_model->get_by_id($id, $this->uri->segment(1));
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nama_pejabat' => $this->input->post('namaPejabat'),
				'pangkat' => $this->input->post('pangkatPejabat')
			);
		$insert = $this->crud_model->save($data, $this->uri->segment(1));
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'nama_pejabat' => $this->input->post('namaPejabat'),
				'pangkat' => $this->input->post('pangkatPejabat')
			);
		$this->crud_model->update(array('id' => $this->input->post('id')), $data, $this->uri->segment(1));
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->crud_model->delete_by_id($id, $this->uri->segment(1));
		echo json_encode(array("status" => TRUE));
	}
	
}
