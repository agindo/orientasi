<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct() {
        parent::__construct();
        checkSession();
    }

	public function index()
	{
		$data['url'] = $this->uri->segment(1);
		$data['formasi'] = $this->formasi_model->show();
		$data['unit'] = $this->unit_model->show();
		$this->load->view('header');
		$this->load->view('peserta', $data);
		$this->load->view('footer', $data);
	}

	public function ajax_list()
	{
		$list = $this->peserta_model->get_datatables($this->session->userdata('checkUsers')['Users']['userID']);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $kata) {
			$no++;
			$row = array();
			$row[] = "<p class='text-center' style='margin-bottom:0px'><small>".$no.".</small></p>";
			$row[] = $kata->tanggal;
			$row[] = $kata->formasi_jabatan;
			$row[] = $kata->unit_kerja;
			$row[] = '<p class="text-center" style="margin-bottom:0px"><a href="'.base_url().'index.php/peserta/lapor/'.$kata->id.'" title=""><i class="fa fa-file-text"></i></a></p>';
			$row[] = '<p class="text-center" style="margin-bottom:0px"><a href="javascript:void(0)" title="Edit" onclick="editData('."'".$kata->id."'".')"><i class="fa fa-edit"></i></a></p>';
			$row[] = '<p class="text-center" style="margin-bottom:0px"><a style="color:red" href="javascript:void(0)" title="Hapus" onclick="deleteData('."'".$kata->id."'".')"><i class="fa fa-remove"></i></a></p>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->peserta_model->count_all($this->session->userdata('checkUsers')['Users']['userID']),
						"recordsFiltered" => $this->peserta_model->count_filtered($this->session->userdata('checkUsers')['Users']['userID']),
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
				'tanggal' => date('Y-m-d'),
				'id_formasi' => $this->input->post('selectformasiJabatan'),
				'id_unit' => $this->input->post('selectunitKerja'),
				'id_user' => $this->session->userdata('checkUsers')['Users']['userID']
			);
		$insert = $this->crud_model->save($data, $this->uri->segment(1));
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'id_formasi' => $this->input->post('selectformasiJabatan'),
				'id_unit' => $this->input->post('selectunitKerja')
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
