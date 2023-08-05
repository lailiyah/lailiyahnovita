<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('surat_model', 'model_surat');

		$this->load->model('auth_model');

		if (!$this->auth_model->current_user()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['daftar_surat']  = $this->model_surat->daftar_surat();
		$data['konten']         = "surat/v_suratmasuk";
		$data['judul']          = "Surat Masuk";
		$this->load->view('template/master', $data);
	}

	public function Simpan()
	{


		$no_surat            = $this->input->post('no_surat');
		$kode_surat      = $this->input->post('kode_surat');
		$perihal     = $this->input->post('perihal');
		$tgl_surat         = $this->input->post('tgl_surat');



		// array menampung data yang akan disimpan
		$data = array(
			'no_surat' => $no_surat,
			'kode_surat' => $kode_surat,
			'perihal' => $perihal,
			'tgl_surat' => $tgl_surat
		);



		$simpan         = $this->db->insert('surat_masuk', $data);
		if ($simpan) {
			$this->session->set_Flashdata('flash', 'Tersimpan');
			redirect('surat');
		} else {
			$this->session->set_Flashdata('flashGagal', 'Gagal Tersimpan');
			redirect('surat');
		};
	}

	public function Simpan_edit()
	{
		$no_surat            = $this->input->post('no_surat');
		$kode_surat      = $this->input->post('kode_surat');
		$perihal     = $this->input->post('perihal');
		$tgl_surat         = $this->input->post('tgl_surat');


		$data = array(
			'no_surat' => $no_surat,
			'kode_surat' => $kode_surat,
			'perihal' => $perihal,
			'tgl_surat' => $tgl_surat
		);

		 
		$this->db->where('no_surat', $no_surat);
		$update = $this->db->update('surat_masuk', $data);

		if ($update) {
			$this->session->set_flashdata('flashUpdate', 'Terupdate');
			redirect('surat');
		} else {
			$this->session->set_flashdata('fUpdateGagal', 'Gagal Terupdate');
			redirect('surat');
		}
	}

	public function Hapus($id_surat)
	{
		$hapus = $this->db->delete('surat_masuk', array('id_surat' => $id_surat));

		if ($hapus) {
			$this->session->set_flashdata('flashHapus', 'Terhapus');
			redirect('surat');
		} else {
			$this->session->set_flashdata('fGagalTerhapus', 'Gagal Terhapus');
			redirect('surat');
		};
	}

	
}
