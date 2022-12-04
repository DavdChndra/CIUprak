<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->helper('url');
    }
    
	public function index()
	{
		$data['buku']= $this->M_User->select()->result();
        $this->load->view('v_user', $data);
	}

    public function input()
    {
        $this->load->view('v_input');
    }

    public function insert()
    {
        $id_buku = $this->input->post('id_buku');
        $judul_buku = $this->input->post('judul_buku');
        $penerbit = $this->input->post('penerbit');
        $jumlah_buku = $this->input->post('jumlah_buku');

        $data = array(
            'id_buku' => $id_buku,
            'judul_buku' => $judul_buku,
            'penerbit' => $penerbit,
            'jumlah_buku' => $jumlah_buku
        );
        $this->M_User->insert($data, 'buku');
        redirect('user');
    }

    public function edit($no){
        $no_data = array(
            'no' => $no
        );
        $data['buku'] = $this->M_User->edit($no_data, 'buku')->result();
        $this->load->view('v_edit', $data);
    }

    public function update(){
        $no = $this->input->post('no');
        $id_buku = $this->input->post('id_buku');
        $judul_buku = $this->input->post('judul_buku');
        $penerbit = $this->input->post('penerbit');
        $jumlah_buku = $this->input->post('jumlah_buku');

        $data = array(
            'id_buku' => $id_buku,
            'judul_buku' => $judul_buku,
            'penerbit' => $penerbit,
            'jumlah_buku' => $jumlah_buku
        );

        $no_data = array(
            'no' => $no
        );

        $this->M_User->update($data, $no_data, 'buku');
        redirect('user');
    }
    
    public function delete($no){
        $no_data = array(
            'no' => $no
        );
        $data['buku'] = $this->M_User->delete($no_data, 'buku');
        redirect('user');
    }
}

?>