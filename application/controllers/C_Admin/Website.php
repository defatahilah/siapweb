<?php
defined('BASEPATH') or exit('No direct script access allowed');

class website extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_website');
        $this->load->helper(array('url'));
        logged_in();
    }
    public function index()
    {
        $data['title'] = 'Siapweb';
        $data['website'] = $this->m_website->tampil_data('website');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/website', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_website()
    {
        $website = array(
            'data_admin' => $this->m_website->tampil_data_admin()
        );

        $data['title'] = 'Siapweb';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/tambah_website', $website);
        $this->load->view('templates/footer');
    }

    public function tambah_website_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_website();
        } else {
            $domain  = $this->input->post('domain');
            $skpd    = $this->input->post('skpd');
            $idadmin = $this->input->post('idadmin');

            $data = array(
                'domain'   => $domain,
                'skpd'     => $skpd,
                'idadmin'  => $idadmin,

            );

            $this->m_website->tambah_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Website Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Website');
        }
    }

    public function hapus_website_aksi($id)
    {
        $where = array('id' => $id);
        $this->m_website->hapus_data($where, 'website');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Website Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Website');
    }

    public function ubah_website()
    {

        $id = $this->uri->segment(2);
        $data['title'] = 'Siapweb';
        $website = array(
            'data_website' => $this->m_website->ubah_data($id),
            'data_admin' => $this->m_website->tampil_data_admin()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/edit_website', $website);
        $this->load->view('templates/footer');
    }

    public function ubah_website_aksi()
    {
        $id             = $this->input->post('id');
        $domain         = $this->input->post('domain');
        $skpd           = $this->input->post('skpd');
        $idadmin        = $this->input->post('idadmin');
        $namaadminweb   = $this->input->post('namaadminweb');


        $data = array(
            'domain'        => $domain,
            'skpd'          => $skpd,
            'idadmin'       => $idadmin,
            'idadmin'  => $namaadminweb,
        );

        $where = array('id' => $id);

        $this->m_website->ubah_data_aksi($where, $data, 'website');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Website Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Website');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'domain',
            'Domain',
            'required',
            array('required' => 'domain harus diisi.')
        );
        $this->form_validation->set_rules(
            'skpd',
            'SKPD Pengelola',
            'required',
            array('required' => 'SKPD harus diisi.')
        );
        $this->form_validation->set_rules(
            'idadmin',
            'Nama Admin',
            'required',
            array('required' => 'nama harus diisi.')
        );
    }
    public function print()
    {
        $data['website'] = $this->m_website->tampil_data('website');
        $this->load->view('admin/print_website', $data);
    }
}
