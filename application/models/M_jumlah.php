<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jumlah extends CI_Model
{
    function data_admin()
    {
        $query = $this->db->query("SELECT * FROM tabeladmin");
        $total = $query->num_rows();
        return $total;
    }
    function data_aplikasi()
    {
        $query = $this->db->query("SELECT * FROM aplikasi");
        $total = $query->num_rows();
        return $total;
    }
    function data_email()
    {
        $query = $this->db->query("SELECT * FROM tabelemail");
        $total = $query->num_rows();
        return $total;
    }
    function data_website()
    {
        $query = $this->db->query("SELECT * FROM website");
        $total = $query->num_rows();
        return $total;
    }
}
