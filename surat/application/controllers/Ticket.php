<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ticket');
	}
	public function index()
	{
		if($this->session->userdata('iduser') == null){
			redirect('login');
		}else{
			
			$data = $this->M_ticket->index('ticket')->result();
			$template = array(
			'main'=>'pages/ticket/v_indexticket',
			'data'=>$data,
			);
			$this->load->view('pages/layouts',$template);
		}
		
	}

	public function store()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		

		$data = array(
		'name'=>$name,
		'email'=>$email,
		'message'=>$message,
		
		);

		$this->M_ticket->store('ticket',$data);

		$this->session->set_flashdata('success','Stored Data');

		redirect('ticket');
	}

	public function update()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		

		$data = array(
		'name'=>$name,
		'email'=>$email,
		'message'=>$message,
		);

		$where = array(
			'ticketid'=>$ticketid
		);

		$this->M_ticket->update('ticket',$where,$data);

		$this->session->set_flashdata('success','Updated Data');

		redirect('ticket');
		$ticketid = $this->input->post('ticketid');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');


	}
}
