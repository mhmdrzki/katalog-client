<?php

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == null) {
                    redirect('auth');
        }
        $this->load->model('Mobil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('kriteria', 'Kriteria', 'required');
        $this->form_validation->set_rules('keyword', 'Keyword', 'required');
        if($this->form_validation->run() == true) {
            $data['judul'] = 'Pencarian Mobil';
            $data['mobil'] = $this->Mobil_model->cariDataMobil();
        }else{
            $data['judul'] = 'Daftar Mobil';
            $data['mobil'] = $this->Mobil_model->getAllMobil();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('mobil/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mobil';

        $this->form_validation->set_rules('no_kerangka', 'No. Kerangka', 'required|numeric');
        $this->form_validation->set_rules('no_polisi', 'No. Polisi', 'required');
        $this->form_validation->set_rules('brand', 'Merek', 'required');
        $this->form_validation->set_rules('type', 'Tipe', 'required');
        $this->form_validation->set_rules('year', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mobil/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mobil_model->tambahDataMobil();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mobil');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mobil';
        $data['mobil'] = $this->Mobil_model->getMobilById($id);

        $this->form_validation->set_rules('no_kerangka', 'No. Kerangka', 'required|numeric');
        $this->form_validation->set_rules('no_polisi', 'No. Polisi', 'required');
        $this->form_validation->set_rules('brand', 'Merek', 'required');
        $this->form_validation->set_rules('type', 'Tipe', 'required');
        $this->form_validation->set_rules('year', 'Tahun', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mobil/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mobil_model->ubahDataMobil();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mobil');
        }
    }

    public function hapus($id)
    {
        $this->Mobil_model->hapusDataMobil($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mobil');
    }



}
