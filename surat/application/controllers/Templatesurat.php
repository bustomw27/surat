<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templatesurat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_templatesurat');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{

			$data = $this->M_templatesurat->index('templatesurat')->result();
			$template = array(
			'main'=>'pages/templatesurat/v_templatesurat',
			'data'=>$data,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$idtemplate = $this->input->post('idtemplate');
		$templatename = $this->input->post('templatename');
		$note = $this->input->post('note');
		$templateimg = $this->input->post('templateimg');
		$status = $this->input->post('status');
		
		$data = array(
		'idtemplate'=>$idtemplate,
		'templatename'=>$templatename,
		'note'=>$note,
		'templateimg'=>$templateimg,
		'status'=>$status,
		);

		$this->M_templatesurat->store('templatesurat',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('templatesurat');
	}

	public function update()
	{
		$idtemplate = $this->input->post('idtemplate');
		$templatename = $this->input->post('templatename');
		$note = $this->input->post('note');
		$templateimg = $this->input->post('templateimg');
		$status = $this->input->post('status');
		
		$data = array(
		'idtemplate'=>$idtemplate,
		'templatename'=>$templatename,
		'note'=>$note,
		'templateimg'=>$templateimg,
		'status'=>$status,
		);

		$where = array(
			'idtemplate'=>$idtemplate
		);

		$this->M_templatesurat->update('templatesurat',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('templatesurat');


	}
}
