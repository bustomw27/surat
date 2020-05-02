<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SpkDetail extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_spkdetail');
		$this->load->helper('url');

		if (!$this->session->userdata('iduser')) {
			redirect('login');
		}
	}
	public function index()
	{

		$template = array(
			'main' => 'pages/spkdetail/v_indexspkdetail',
			'spk' => $this->M_spkdetail->index('m_spk')->result(),
			'data' => $this->M_spkdetail->indexJoin('tbl_spkdetail')->result(),
		);
		$this->load->view('pages/layouts', $template);
	}

	public function store()
	{

		$this->load->library('upload');

		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['gambar']['name']);
		if ($cpt == 6) {
			for ($i = 0; $i < $cpt; $i++) {
				$_FILES['gambar']['name'] = $files['gambar']['name'][$i];
				$_FILES['gambar']['type'] = $files['gambar']['type'][$i];
				$_FILES['gambar']['tmp_name'] = $files['gambar']['tmp_name'][$i];
				$_FILES['gambar']['error'] = $files['gambar']['error'][$i];
				$_FILES['gambar']['size'] = $files['gambar']['size'][$i];

				$this->upload->initialize($this->set_upload_options());
				if ($this->upload->do_upload('gambar')) {
					$dataInfo[] = $this->upload->data();
				} else {
					print_r($this->upload->display_errors());
				}
			}

			$data = array(

				'idspk' => $this->input->post('idspk'),
				'lokasi' => $this->input->post('lokasi'),
				'tema' => $this->input->post('tema'),
				'ukuran' => $this->input->post('ukuran'),
				'jumlah' => $this->input->post('jumlah'),
				'spesifikasi' => $this->input->post('spesifikasi'),
				'periode_tayang' => $this->input->post('periode_tayang'),
				'harga' => $this->input->post('harga'),
				'pembayaranvia' => $this->input->post('pembayaranvia'),
				'biaya' => $this->input->post('biaya'),
				'gambar1' => $dataInfo[0]['file_name'],
				'gambar2' => $dataInfo[1]['file_name'],
				'gambar3' => $dataInfo[2]['file_name'],
				'gambar4' => $dataInfo[3]['file_name'],
				'gambar5' => $dataInfo[4]['file_name'],
				'gambar6' => $dataInfo[5]['file_name'],
				'tanggalapproval' => $this->input->post('tanggalapproval'),
			);

			$this->tbl_spkdetail->store('tbl_spkdetail', $data);

			$this->session->set_flashdata('success', 'Stored Data');

			redirect('spkdetail');
		} else {
			$this->session->set_flashdata('error', 'harus memasukkan 6 gambar');
			redirect('spkdetail');
		}
	}

	public function update()
	{
		$idspkdetail = $this->input->post('idspkdetail');
		$where = array('idspkdetail' => $idspkdetail);
		$row = $this->M_spkdetail->index('tbl_spkdetail', $where)->first_row();

		$this->load->library('upload');

		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['gambar']['name']);
		if ($cpt != 1) {
			unlink("assets/images/" . $row->gambar1);
			unlink("assets/images/" . $row->gambar2);
			unlink("assets/images/" . $row->gambar3);
			unlink("assets/images/" . $row->gambar4);
			unlink("assets/images/" . $row->gambar5);
			unlink("assets/images/" . $row->gambar6);
			for ($i = 0; $i < $cpt; $i++) {
				$_FILES['gambar']['name'] = $files['gambar']['name'][$i];
				$_FILES['gambar']['type'] = $files['gambar']['type'][$i];
				$_FILES['gambar']['tmp_name'] = $files['gambar']['tmp_name'][$i];
				$_FILES['gambar']['error'] = $files['gambar']['error'][$i];
				$_FILES['gambar']['size'] = $files['gambar']['size'][$i];


				$this->upload->initialize($this->set_upload_options());
				if ($this->upload->do_upload('gambar')) {
					$dataInfo[] = $this->upload->data();
				} else {
					print_r($this->upload->display_errors());
				}
			}
			$data = array(
				'idspk' => $this->input->post('idspk'),
				'lokasi' => $this->input->post('lokasi'),
				'tema' => $this->input->post('tema'),
				'ukuran' => $this->input->post('ukuran'),
				'jumlah' => $this->input->post('jumlah'),
				'spesifikasi' => $this->input->post('spesifikasi'),
				'periode_tayang' => $this->input->post('periode_tayang'),
				'harga' => $this->input->post('harga'),
				'pembayaranvia' => $this->input->post('pembayaranvia'),
				'biaya' => $this->input->post('biaya'),
				'gambar1' => $dataInfo[0]['file_name'],
				'gambar2' => $dataInfo[1]['file_name'],
				'gambar3' => $dataInfo[2]['file_name'],
				'gambar4' => $dataInfo[3]['file_name'],
				'gambar5' => $dataInfo[4]['file_name'],
				'gambar6' => $dataInfo[5]['file_name'],
				'tanggalapproval' => $this->input->post('tanggalapproval'),
			);
		} else {
			$data = array(
				'idspk' => $this->input->post('idspk'),
				'lokasi' => $this->input->post('lokasi'),
				'tema' => $this->input->post('tema'),
				'ukuran' => $this->input->post('ukuran'),
				'jumlah' => $this->input->post('jumlah'),
				'spesifikasi' => $this->input->post('spesifikasi'),
				'periode_tayang' => $this->input->post('periode_tayang'),
				'harga' => $this->input->post('harga'),
				'pembayaranvia' => $this->input->post('pembayaranvia'),
				'biaya' => $this->input->post('biaya'),
				'gambar1' => $dataInfo[0]['file_name'],
				'gambar2' => $dataInfo[1]['file_name'],
				'gambar3' => $dataInfo[2]['file_name'],
				'gambar4' => $dataInfo[3]['file_name'],
				'gambar5' => $dataInfo[4]['file_name'],
				'gambar6' => $dataInfo[5]['file_name'],
				'tanggalapproval' => $this->input->post('tanggalapproval'),
			);
		}


		$this->M_spkdetail->update('tbl_spkdetail', $where, $data);

		$this->session->set_flashdata('success', 'Updated Data');

		redirect('spkdetail');
	}

	private function set_upload_options()
	{
		$config = array();
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types']    = 'jpg|jpeg|png|gif';
		$config['max_size']         = '2048'; // 2 MB

		return $config;
	}
}
