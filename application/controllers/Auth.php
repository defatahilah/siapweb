<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_jumlah');
    }

    public function index()
    {
        $jumlah_data = array(
            'data_admin' => $this->m_jumlah->data_admin(),
            'data_aplikasi' => $this->m_jumlah->data_aplikasi(),
            'data_email' => $this->m_jumlah->data_email(),
            'data_website' => $this->m_jumlah->data_website()
        );
        $data['title'] = 'Siapweb';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('User/index', $jumlah_data);
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $this->form_validation->set_rules('namauser', 'Name', 'trim|required');
        $this->form_validation->set_rules('passworduser', 'Password', 'trim|required');
        $this->form_validation->set_rules('captcha', 'captcha', 'required');

        if ($this->form_validation->run() == false) {
            $path = './assets/captcha/';
            if (!file_exists($path)) {
                $create = mkdir($path, 0777);
                if (!$create) {
                    return;
                }
            }
            $kata = array_merge(range('1', '9'), range('a', 'z'));
            $acak = shuffle($kata);
            $str = substr(implode($kata), 0, 5);
            $data_ses = array('captcha_str' => $str);
            $this->session->set_userdata($data_ses);
            $vals = array(



                'word' => $str,
                'img_path' => $path,
                'img_url' => base_url() . 'assets/captcha/',
                'img_width' => 150,
                'img_height' => 40,
                'expiration' => 7200,
            );
            $capc = create_captcha($vals);
            $data1['captcha_image'] = $capc['image'];
            $data['title'] = 'Login';
            $this->load->view('templates/login_header', $data);
            $this->load->view('auth/login', $data1);
            $this->load->view('templates/login_footer');
        } else {
            $this->_login();
        }
    }

    /*public function kirim()
    {
        $po_captcha = $this->input->post('captcha');
        if ($po_captcha != $this->session->userdata('captcha_str')) {
            $this->session->set_flashdata('notif', '
    <div class="alert alert-warning">Captcha salah</div>');
            redirect('Vadmin');
        } else {
            redirect('Vadmin');
        }/** */

    private function _login()
    {
        $nama = $this->input->post('namauser');
        $password = $this->input->post('passworduser');

        $this->db->select('namauser, passworduser')
            ->from('tabeluser')
            ->where('namauser', $nama)
            ->where('passworduser', md5($password));
        $query = $this->db->get();
        $hasil = $query->row_array();
        $po_captcha = $this->input->post('captcha');

        //var_dump(!$this->session->userdata('captcha_str'));

        // var_dump();
        // var_dump($po_captcha);
        // die();

        if ($po_captcha == $this->session->userdata('captcha_str')) {
            $this->session->set_userdata('nama', $hasil['namauser']);
            if ($hasil) {
                // $this->session->set_userdata('captcha_str', $po_captcha['captcha']);
                redirect('/Dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau Password salah');
                redirect('Auth/login');
            }
        } else {
            !$this->session->userdata('captcha_str');
            $this->session->set_flashdata('error', '<div class="alert alert-warning">Captcha salah</div>');
            redirect('Auth/login');
            /** */
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nama');

        redirect('auth');
    }
}
