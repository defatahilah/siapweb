<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aplikasi');
        logged_in();
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['aplikasi'] = $this->m_aplikasi->tampil_data('aplikasi')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/aplikasi', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aplikasi()
    {
        $data['title'] = 'Siapweb';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/tambah_aplikasi');
        $this->load->view('templates/footer');
    }

    public function tambah_aplikasi_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_aplikasi();
        } else {
            $aplikasi      = $this->input->post('aplikasi');
            $link          = $this->input->post('link');
            $sektor        = $this->input->post('sektor');
            $skpdapp       = $this->input->post('skpdapp');
            $status        = $this->input->post('status');
            $fungsiapp     = $this->input->post('fungsiapp');
            $kategoriapp   = $this->input->post('kategoriapp');

            $data = array(
                'aplikasi'     => $aplikasi,
                'link'         => $link,
                'sektor'       => $sektor,
                'skpdapp'      => $skpdapp,
                'status'       => $status,
                'fungsiapp'    => $fungsiapp,
                'kategoriapp'  => $kategoriapp,

            );

            $this->m_aplikasi->tambah_data($data, 'aplikasi');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Aplikasi Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Aplikasi');
        }
    }

    public function hapus_aplikasi_aksi($id)
    {
        $where = array('id' => $id);
        $this->m_aplikasi->hapus_data($where, 'aplikasi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Aplikasi Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Aplikasi');
    }

    public function ubah_aplikasi($id)
    {
        $id = $this->uri->segment(2);
        $where = array('id' => $id);
        $data['title'] = 'Siapweb';
        $data['aplikasi'] = $this->m_aplikasi->ubah_data($where, 'aplikasi')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/edit_aplikasi', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_aplikasi_aksi()
    {
        $id            = $this->input->post('id');
        $aplikasi      = $this->input->post('aplikasi');
        $link          = $this->input->post('link');
        $sektor        = $this->input->post('sektor');
        $skpdapp       = $this->input->post('skpdapp');
        $status        = $this->input->post('status');
        $fungsiapp     = $this->input->post('fungsiapp');
        $kategoriapp   = $this->input->post('kategoriapp');


        $data = array(
            'aplikasi'     => $aplikasi,
            'link'         => $link,
            'sektor'       => $sektor,
            'skpdapp'      => $skpdapp,
            'status'       => $status,
            'fungsiapp'    => $fungsiapp,
            'kategoriapp' => $kategoriapp,

        );

        $where = array('id' => $id);

        $this->m_aplikasi->ubah_data_aksi($where, $data, 'aplikasi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Aplikasi Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Aplikasi');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'aplikasi',
            'Aplikasi',
            'required',
            array('required' => 'Data Aplikasi harus diisi.')
        );
        $this->form_validation->set_rules(
            'sektor',
            'Sektor',
            'required',
            array('required' => 'Data Sektor harus diisi.')
        );
        $this->form_validation->set_rules(
            'skpdapp',
            'SKPD Pengelola',
            'required',
            array('required' => 'Data SKPD harus diisi.')
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required',
            array('required' => 'Status harus diisi.')
        );
        $this->form_validation->set_rules(
            'fungsiapp',
            'Fungsi',
            'required',
            array('required' => 'Data Fungsi harus diisi.')
        );
        $this->form_validation->set_rules(
            'kategoriapp',
            'Kategori',
            'required',
            array('required' => 'Kategori harus diisi.')
        );
    }
    public function print()
    {
        $data['aplikasi'] = $this->m_aplikasi->tampil_data('aplikasi')->result();
        $this->load->view('admin/print_aplikasi', $data);
    }
}
