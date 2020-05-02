<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_fp');

        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
    }
    public function index()
    {

        $template = array(
            'main' => 'pages/fp/v_indexfp',
            'data' => $this->M_fp->index('m_fp')->result(),
        );
        $this->load->view('pages/layouts', $template);
    }

    

   
}
