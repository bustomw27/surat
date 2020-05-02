<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_employee');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('employee');
		}else{		
			$data = $this->M_employee->index('tbl_employee')->result();
			$template = array(
			'main'=>'pages/employee/v_indexemployee',
			'data'=>$data,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$name = $this->input->post('name');
		$branch = $this->input->post('branch');
		$divisi = $this->input->post('divisi');
		$tittle = $this->input->post('tittle');
		$level = $this->input->post('level');
		$sex = $this->input->post('sex');

		$data = array(
		'name'=>$name,
		'branch'=>$branch,
		'divisi'=>$divisi,
		'tittle'=>$tittle,
		'level'=>$level,
		'sex'=>$sex,
		);

		$this->M_employee->store('tbl_employee',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('employee');
	}

	public function update()
	{
		$name = $this->input->post('name');
		$branch = $this->input->post('branch');
		$divisi = $this->input->post('divisi');
		$tittle = $this->input->post('tittle');
		$level = $this->input->post('level');
		$sex = $this->input->post('sex');

		$data = array(
		'name'=>$name,
		'branch'=>$branch,
		'divisi'=>$divisi,
		'tittle'=>$tittle,
		'level'=>$level,
		'sex'=>$sex,
		);

		$where = array(
			'idpayroll'=>$idpayroll
		);

		$this->M_employee->update('tbl_employee',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('employee');


	}
}
