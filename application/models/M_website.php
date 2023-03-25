<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_website extends CI_Model
{

    public function tampil_data()
    {
        $this->db->order_by('skpd', 'ASC');
        $this->db->select('website.id as id, website.domain as domain, website.skpd as skpd, website.idadmin as idadmin, tabeladmin.namaadminweb as namaadminweb, tabeladmin.nohpadminweb as nohpadminweb');
        $this->db->from('website');
        $this->db->join('tabeladmin', 'tabeladmin.id=website.idadmin');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah_data($data)
    {
        return $this->db->insert('website', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ubah_data($id)
    {
        $this->db->select('website.id as id, website.domain as domain, website.skpd as skpd, website.idadmin as idadmin, tabeladmin.namaadminweb as namaadminweb');
        $this->db->from('website');
        $this->db->join('tabeladmin', 'tabeladmin.id=website.idadmin');
        $this->db->where('website.id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function ubah_data_aksi($where, $data)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('website');
    }

    public function tampil_data_admin()
    {
        $this->db->select('*');
        $this->db->from('tabeladmin');
        $this->db->order_by('namaadminweb', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
