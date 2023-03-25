<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kontak extends CI_Model
{

    public function tampil_data($table)
    {
        $this->db->order_by('nama', 'ASC');
        return $this->db->get($table);
    }
    public function kontak($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
