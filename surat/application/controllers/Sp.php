<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_sp');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/sp/v_indexsp',
            'data' => $this->M_sp->index('m_sp')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    

   
}
