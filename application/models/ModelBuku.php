<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
    //manajemen buku
    function getBuku()
    {
        return $this->db->get('buku');
    }

    function getBukuLimit()
    {
        $this->db->limit(5);
        return $this->db->get('buku');
    }

    function bukuWhere($where)
    {
        return $this->db->get_where('buku', $where);
    }

    function simpanBuku($data = null)
    {
        $this->db->insert('buku', $data);
    }

    function updateBuku($data = null, $where = null)
    {
        $this->db->update('buku', $data, $where);
    }

    function hapusBuku($where = null)
    {
        $this->db->delete('buku', $where);
    }

    function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('buku');
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    function getKategori()
    {
        return $this->db->get('kategori');
    }

    function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    function joinKategoriBuku($where)
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id=buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
