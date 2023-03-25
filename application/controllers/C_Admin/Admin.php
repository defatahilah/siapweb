<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_jumlah');
        logged_in();
    }

    public function dashboard_vadmin()
    {
        $jumlah_data = array(
            'data_admin' => $this->m_jumlah->data_admin(),
            'data_aplikasi' => $this->m_jumlah->data_aplikasi(),
            'data_email' => $this->m_jumlah->data_email(),
            'data_website' => $this->m_jumlah->data_website()
        );
        $data['title'] = 'Dashboard';
        //$data['jumlahadmin'] = $this->m_jumlah->jumlah_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('V_admin/index', $jumlah_data);
        $this->load->view('templates/footer');
    }

    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['tabeladmin'] = $this->m_admin->tampil_data('tabeladmin')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_admin()
    {
        $data['title'] = 'Rekap Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/tambah_admin');
        $this->load->view('templates/footer');
    }

    public function tambah_admin_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_admin();
        } else {
            $namaadminweb      = $this->input->post('namaadminweb');
            $nohpadminweb         = $this->input->post('nohpadminweb');

            $data = array(
                'namaadminweb'     => $namaadminweb,
                'nohpadminweb'      => $nohpadminweb,

            );

            $this->m_admin->tambah_data($data, 'tabeladmin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Admin');
        }
    }

    public function hapus_admin_aksi($id)
    {
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where, 'tabeladmin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Admin Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Admin');
    }

    public function ubah_admin()
    {
        $id = $this->uri->segment(2);
        $where = array('id' => $id);
        $data['title'] = 'Siapweb';
        $data['tabeladmin'] = $this->m_admin->ubah_data($where, 'tabeladmin')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/edit_admin', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_admin_aksi()
    {
        $id                 = $this->input->post('id');
        $namaadminweb       = $this->input->post('namaadminweb');
        $nohpadminweb       = $this->input->post('nohpadminweb');


        $data = array(
            'namaadminweb'      => $namaadminweb,
            'nohpadminweb'      => $nohpadminweb,

        );

        $where = array('id' => $id);

        $this->m_admin->ubah_data_aksi($where, $data, 'tabeladmin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Admin Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Admin');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'namaadminweb',
            'Nama Admin',
            'required',
            array('required' => 'nama harus diisi.')
        );
        $this->form_validation->set_rules(
            'nohpadminweb',
            'No HP',
            'required',
            array('required' => 'No Hp harus diisi.')
        );
    }
    public function print()
    {

        $data['tabeladmin'] = $this->m_admin->tampil_data('tabeladmin')->result();
        $this->load->view('admin/print_admin', $data);
    }
}
