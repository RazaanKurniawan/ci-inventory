<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invent extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('m_invent');

        $data = array(
            'data_invent' => $this->m_invent->get_invent()->result()
        );
        //load view
        $this->load->view('data_invent', $data);
    }
    public function tambah()
{
  //load view
  $this->load->view('tambah_invent');
}
    public function simpan()
{
   //load model
   $this->load->model('m_invent');

    //get data dari form
    $kode_barang    = $this->input->post('kode_barang');
    $nama_barang    = $this->input->post('nama_barang');
    $qty            = $this->input->post('qty');
    $harga          = $this->input->post('harga_satuan');

    $data = array(
        'kode_barang'     => $kode_barang,    
        'nama_barang'     => $nama_barang,
        'qty'             => $qty,
        'harga_satuan'    => $harga
   );

    //insert data via model
    $this->m_invent->simpan_invent($data);

    //redirect ke controller siswa
    redirect('invent');

}
public function edit($id_barang)
{
  //load model 
  $this->load->model('m_invent');

  //get ID dari URL segment ke 3
  $id_barang = $this->uri->segment(3);

  $data = array(
     'data_invent' => $this->m_invent->edit_invent($id_barang)
  );

   //load view
   $this->load->view('edit_invent', $data);
}
public function update()
{
   //load model
   $this->load->model('m_invent');

   //get data dari form
    $id_barang['id_barang'] = $this->input->post("id_barang");
    $kode_barang    = $this->input->post('kode_barang');
    $nama_barang    = $this->input->post('nama_barang');
    $qty            = $this->input->post('qty');
    $harga          = $this->input->post('harga_satuan');

    $data = array(
        'kode_barang'     => $kode_barang,    
        'nama_barang'     => $nama_barang,
        'qty'             => $qty,
        'harga_satuan'    => $harga
   );

   //update via model    
   $this->m_invent->update_invent($data, $id_barang);

   //redirect ke controller siswa
   redirect('invent');
}
public function hapus($id_siswa)
{
  //load model
  $this->load->model('m_siswa');

   //get ID dari URL segment ke 3
   $id['id_siswa'] = $this->uri->segment(3);

   //delete via model
   $this->m_siswa->hapus_siswa($id);

   //redirect ke controller siswa
   redirect('siswa');

}
}
