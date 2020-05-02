<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul4 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_modul4');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/finance/v_modul4',
            'data' => $this->M_modul4->index('m_modul4')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'judul_modul4' => $this->input->post('judul_modul4'),
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mei'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agust' => $this->input->post('agust'),
            'sept' => $this->input->post('sept'),
            'oktob' => $this->input->post('oktob'),
            'novem' => $this->input->post('novem'),
            'desem' => $this->input->post('desem'),
            'jumlah' => $this->input->post('jumlah'),
        );

        $this->M_modul4->store('m_modul4', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('modul4');
    }

    public function update()
    {

        $data = array(
            'judul_modul4' => $this->input->post('judul_modul4'),
            'jan' => $this->input->post('jan'),
            'feb' => $this->input->post('feb'),
            'mar' => $this->input->post('mar'),
            'apr' => $this->input->post('apr'),
            'mei' => $this->input->post('mei'),
            'jun' => $this->input->post('jun'),
            'jul' => $this->input->post('jul'),
            'agust' => $this->input->post('agust'),
            'sept' => $this->input->post('sept'),
            'oktob' => $this->input->post('oktob'),
            'novem' => $this->input->post('novem'),
            'desem' => $this->input->post('desem'),
            'jumlah' => $this->input->post('jumlah'),
        );

        $where = array(
            'id_modul4' => $this->input->post('id_modul4')
        );

        $this->M_modul4->update('m_modul4', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('modul4');
    }
}
