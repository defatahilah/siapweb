<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_aplikasi extends CI_Model
{

    public function tampil_data($table)
    {
        $this->db->order_by('aplikasi', 'ASC');
        return $this->db->get($table);
    }
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ubah_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function ubah_data_aksi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
