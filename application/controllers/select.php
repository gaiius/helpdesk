<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Controller {

function __construct(){
        parent::__construct();
        $this->load->model('model_app');
        
    }


 function select_bagian_departemen()
 {

 	   $id_departemen = $this->input->post('id_departemen');
		
		if(trim($id_departemen) == ""){
			$data['dd_bagian_departemen'] = $this->model_app->dropdown_bagian_departemen('ea');
			$data['id_bagian_departemen'] = "";
		}else{
			$data['dd_bagian_departemen'] = $this->model_app->dropdown_bagian_departemen($id_departemen);
			$data['id_bagian_departemen'] = "";
		}
		
		$this->load->view('combo/select_bagian_departemen',$data);	

 }

 function select_view_job()
 {

 	   $id_teknisi = $this->input->post('id_teknisi');
		

	    $sql = "SELECT A.progress, A.status, A.id_ticket, D.nama, A.tanggal, B.nama_sub_kategori, C.nama_kategori
                                   FROM ticket A 
                                   LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori
                                   LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
                                   LEFT JOIN karyawan D ON D.nik = A.reported
                                    WHERE A.id_teknisi = '$id_teknisi'";
	     $data['dataassigment'] = $this->db->query($sql);
		
		$this->load->view('combo/select_view_job',$data);	

 }

  function select_sub_kategori()
 {

 	   $id_kategori = $this->input->post('id_kategori');
		
		if(trim($id_kategori) == ""){
			$data['dd_sub_kategori'] = $this->model_app->dropdown_sub_kategori('ea');
			$data['id_sub_kategori'] = "";
		}else{
			$data['dd_sub_kategori'] = $this->model_app->dropdown_sub_kategori($id_kategori);
			$data['id_sub_kategori'] = "";
		}
		
		$this->load->view('combo/select_sub_kategori',$data);	

 }



    
}
