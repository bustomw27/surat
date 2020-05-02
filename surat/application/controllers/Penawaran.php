<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penawaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penawaran');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/penawaran/v_indexpenawaran',
            'data' => $this->M_penawaran->index('m_penawaran')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    public function store()
    {

        $data = array(
            'nomor' => $this->input->post('nomor'),
            'namabrand' => $this->input->post('namabrand'),
            'jenispengajuan' => $this->input->post('jenispengajuan'),
            'jenismedia' => $this->input->post('jenismedia'),
            'masakontrak' => $this->input->post('masakontrak'),
            'nominal' => $this->input->post('nominal'),
        );

        $this->M_penawaran->store('m_penawaran', $data);

        $this->session->set_flashdata('success', 'Stored Data');

        redirect('penawaran');
    }

    public function update()
    {

        $data = array(
            'nomor' => $this->input->post('nomor'),
            'namabrand' => $this->input->post('namabrand'),
            'jenispengajuan' => $this->input->post('jenispengajuan'),
            'jenismedia' => $this->input->post('jenismedia'),
            'masakontrak' => $this->input->post('masakontrak'),
            'nominal' => $this->input->post('nominal'),
        );

        $where = array(
            'id_penawaran' => $this->input->post('id_penawaran')
        );

        $this->M_penawaran->update('m_penawaran', $where, $data);

        $this->session->set_flashdata('success', 'Updated Data');

        redirect('penawaran');
    }
}
