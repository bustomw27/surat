<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_customer');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{
			$code = $this->M_customer->kodebarang('tbl_customer')->row();
			$kodebarang = $code->maxKode;
			$nourut = substr($kodebarang, 1, 6);
			$nourut++;
			$char="C";
			$kodebarangr = $char.sprintf("%06s", $nourut);
			$data = $this->M_customer->index('tbl_customer')->result();
			$template = array(
			'main'=>'pages/customer/v_indexcustomer',
			'data'=>$data,
			'city'=>$this->M_customer->index('m_city')->result(),
			'country'=>$this->M_customer->index('m_negara')->result(),
			'countcustomer'=>count($this->M_customer->index_show('tbl_customer')->result()),
			'activecustomer'=>count($this->M_customer->index_active('tbl_customer')->result()),
			'deactivecustomer'=>count($this->M_customer->index_deactive('tbl_customer')->result()),
			'kodebarang'=>$kodebarangr,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$codecustomer = $this->input->post('codecustomer');
		$companyname = $this->input->post('companyname');
		$address01 = $this->input->post('address01');
		$city01 = $this->input->post('city01');
		$address02 = $this->input->post('address02');
		$city02 = $this->input->post('city02');
		$address03 = $this->input->post('address03');
		$city03 = $this->input->post('city03');
		$name01 = $this->input->post('name01');
		$jabatan01 = $this->input->post('jabatan01');
		$name02 = $this->input->post('name02');
		$jabatan02 = $this->input->post('jabatan02');
		$name03 = $this->input->post('name03');
		$jabatan03 = $this->input->post('jabatan03');
		$brand01 = $this->input->post('brand01');
		$brand02 = $this->input->post('brand02');
		$phone = $this->input->post('phone');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$status = 1;
		$note = $this->input->post('note');

		$data = array(
		'codecustomer'=>$codecustomer,
		'companyname'=>$companyname,
		'address01'=>$address01,
		'city01'=>$city01,
		'address02'=>$address02,
		'city02'=>$city02,
		'address03'=>$address03,
		'city03'=>$city03,
		'name01'=>$name01,
		'jabatan01'=>$jabatan01,
		'name02'=>$name02,
		'jabatan02'=>$jabatan02,
		'name03'=>$name03,
		'jabatan03'=>$jabatan03,
		'brand01'=>$brand01,
		'brand02'=>$brand02,
		'phone'=>$phone,
		'fax'=>$fax,
		'email'=>$email,
		'country'=>$country,
		'status'=>$status,
		'note'=>$note,
		);

		$this->M_customer->store('tbl_customer',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('customer');
	}

	public function update()
	{
		$idcustomer = $this->input->post('idcustomer');
		$companyname = $this->input->post('companyname');
		$address01 = $this->input->post('address01');
		$city01 = $this->input->post('city01');
		$address02 = $this->input->post('address02');
		$city02 = $this->input->post('city02');
		$address03 = $this->input->post('address03');
		$city03 = $this->input->post('city03');
		$name01 = $this->input->post('name01');
		$jabatan01 = $this->input->post('jabatan01');
		$name02 = $this->input->post('name02');
		$jabatan02 = $this->input->post('jabatan02');
		$name03 = $this->input->post('name03');
		$jabatan03 = $this->input->post('jabatan03');
		$brand01 = $this->input->post('brand01');
		$brand02 = $this->input->post('brand02');
		$phone = $this->input->post('phone');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$status = $this->input->post('status');
		$note = $this->input->post('note');

		$data = array(
		'companyname'=>$companyname,
		'address01'=>$address01,
		'city01'=>$city01,
		'address02'=>$address02,
		'city02'=>$city02,
		'address03'=>$address03,
		'city03'=>$city03,
		'name01'=>$name01,
		'jabatan01'=>$jabatan01,
		'name02'=>$name02,
		'jabatan02'=>$jabatan02,
		'name03'=>$name03,
		'jabatan03'=>$jabatan03,
		'brand01'=>$brand01,
		'brand02'=>$brand02,
		'phone'=>$phone,
		'fax'=>$fax,
		'email'=>$email,
		'country'=>$country,
		'status'=>$status,
		'note'=>$note,
		);

		$where = array(
			'idcustomer'=>$idcustomer
		);

		$this->M_customer->update('tbl_customer',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('customer');


	}
}
