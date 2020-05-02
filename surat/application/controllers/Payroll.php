<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_payroll');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{

			$data = $this->M_payroll->index('payroll')->result();
			$template = array(
			'main'=>'pages/payroll/v_indexpayroll',
			'data'=>$data,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$idpayroll = $this->input->post('idpayroll');
		$tglsurat = $this->input->post('tglsurat');
		$nosurat = $this->input->post('nosurat');
		$tglefektif = $this->input->post('tglefektif');
		$nama = $this->input->post('nama');
		$titlesebelum = $this->input->post('titlesebelum');
		$lokasisebelum = $this->input->post('lokasisebelum');
		$statussebelum = $this->input->post('statussebelum');
		$titlesesudah = $this->input->post('titlesesudah');
		$lokasisesudah = $this->input->post('lokasisesudah');
		$statussesudah = $this->input->post('statussesudah');
		$penandatangan = $this->input->post('penandatangan');
		$jabatanpenandatangan = $this->input->post('jabatanpenandatangan');

		$data = array(
		'idpayroll'=>$idpayroll,
		'tglsurat'=>$tglsurat,
		'nosurat'=>$nosurat,
		'tglefektif'=>$tglefektif,
		'nama'=>$nama,
		'titlesebelum'=>$titlesebelum,
		'lokasisebelum'=>$lokasisebelum,
		'statussebelum'=>$statussebelum,
		'titlesesudah'=>$titlesesudah,
		'lokasisesudah'=>$lokasisesudah,
		'statussesudah'=>$statussesudah,
		'penandatangan'=>$penandatangan,
		'jabatanpenandatangan'=>$jabatanpenandatangan,
		);

		$this->M_payroll->store('payroll',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('payroll');
	}

	public function update()

	{
		$idpayroll = $this->input->post('idpayroll');
		$tglsurat = $this->input->post('tglsurat');
		$nosurat = $this->input->post('nosurat');
		$tglefektif = $this->input->post('tglefektif');
		$nama = $this->input->post('nama');
		$titlesebelum = $this->input->post('titlesebelum');
		$lokasisebelum = $this->input->post('lokasisebelum');
		$statussebelum = $this->input->post('statussebelum');
		$titlesesudah = $this->input->post('titlesesudah');
		$lokasisesudah = $this->input->post('lokasisesudah');
		$statussesudah = $this->input->post('statussesudah');
		$penandatangan = $this->input->post('penandatangan');
		$jabatanpenandatangan = $this->input->post('jabatanpenandatangan');

		$data = array(
		'idpayroll'=>$idpayroll,
		'tglsurat'=>$tglsurat,
		'nosurat'=>$nosurat,
		'tglefektif'=>$tglefektif,
		'nama'=>$nama,
		'titlesebelum'=>$titlesebelum,
		'lokasisebelum'=>$lokasisebelum,
		'statussebelum'=>$statussebelum,
		'titlesesudah'=>$titlesesudah,
		'lokasisesudah'=>$lokasisesudah,
		'statussesudah'=>$statussesudah,
		'penandatangan'=>$penandatangan,
		'jabatanpenandatangan'=>$jabatanpenandatangan,
		);

		$where = array(
			'idpayroll'=>$idpayroll
		);

		$this->M_payroll->update('payroll',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('payroll');


	}
}
