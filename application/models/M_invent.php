<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_invent extends CI_Model {

    public function get_invent()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('tbl_inventory');
        $this->db->order_by('id_barang');
        return $this->db->get();
    }
    public function simpan_invent($data)
{
  //insert data
  return $this->db->insert("tbl_inventory", $data);
}
public function edit_invent($id_barang)
{
    //edity data
    $query = $this->db->where("id_barang", $id_barang)->get("tbl_inventory");
    return $query->row();
}
public function update_invent($data, $id_barang)
{
   //update siswa
   return $this->db->update("tbl_inventory", $data, $id_barang);
}
public function hapus_siswa($id)
{
   //hapus siswa
   return $this->db->delete("tbl_siswa", $id);
}
}