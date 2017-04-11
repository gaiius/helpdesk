<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

function __construct(){
        parent::__construct();
        $this->load->model('model_app');

        if(!$this->session->userdata('id_user'))
       {
        $this->session->set_flashdata("msg", "<div class='alert alert-info'>
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
       <strong><span class='glyphicon glyphicon-remove-sign'></span></strong> Silahkan login terlebih dahulu.
       </div>");
        redirect('login');
        }
        
    }


 function hapus()
 {
 	$id = $_POST['id'];

 	$this->db->trans_start();

 	$this->db->where('nik', $id);
 	$this->db->delete('karyawan');

 	$this->db->trans_complete();
	
 }

 function add()
 {

 	    $data['header'] = "header/header";
        $data['navbar'] = "navbar/navbar";
        $data['sidebar'] = "sidebar/sidebar";
        $data['body'] = "body/form_ticket";

        $id_dept = trim($this->session->userdata('id_dept'));
        $id_user = trim($this->session->userdata('id_user'));

        //notification 

        $sql_listticket = "SELECT COUNT(id_ticket) AS jml_list_ticket FROM ticket WHERE status = 2";
        $row_listticket = $this->db->query($sql_listticket)->row();

        $data['notif_list_ticket'] = $row_listticket->jml_list_ticket;

        $sql_approvalticket = "SELECT COUNT(A.id_ticket) AS jml_approval_ticket FROM ticket A 
        LEFT JOIN sub_kategori B ON B.id_sub_kategori = A.id_sub_kategori 
        LEFT JOIN kategori C ON C.id_kategori = B.id_kategori
        LEFT JOIN karyawan D ON D.nik = A.reported 
        LEFT JOIN bagian_departemen E ON E.id_bagian_dept = D.id_bagian_dept WHERE E.id_dept = $id_dept AND status = 1";
        $row_approvalticket = $this->db->query($sql_approvalticket)->row();

        $data['notif_approval'] = $row_approvalticket->jml_approval_ticket;

        $sql_assignmentticket = "SELECT COUNT(id_ticket) AS jml_assignment_ticket FROM ticket WHERE status = 3 AND id_teknisi='$id_user'";
        $row_assignmentticket = $this->db->query($sql_assignmentticket)->row();

        $data['notif_assignment'] = $row_assignmentticket->jml_assignment_ticket;

        //end notification
        
        $id_user = trim($this->session->userdata('id_user'));

        $cari_data = "select A.nik, A.nama, C.nama_dept, B.nama_bagian_dept FROM karyawan A
        							   LEFT JOIN bagian_departemen B ON B.id_bagian_dept = A.id_bagian_dept
        							   LEFT JOIN departemen C ON C.id_dept = B.id_dept
        							   WHERE A.nik = '$id_user'";

        $row = $this->db->query($cari_data)->row();

        $data['id_ticket'] = "";

        $data['id_user'] = $id_user;
        $data['nama'] = $row->nama;
        $data['departemen'] = $row->nama_dept;
        $data['bagian_departemen'] = $row->nama_bagian_dept;		
		
		$data['dd_kategori'] = $this->model_app->dropdown_kategori();
		$data['id_kategori'] = "";

		$data['dd_kondisi'] = $this->model_app->dropdown_kondisi();
		$data['id_kondisi'] = "";

		$data['problem_summary'] = "";
		$data['problem_detail'] = "";

		$data['status'] = "";
		$data['progress'] = "";

		$data['url'] = "ticket/save";

		$data['flag'] = "add";
    
        $this->load->view('template', $data);

 }

 function save()
 {

 	$getkodeticket = $this->model_app->getkodeticket();
	
	$ticket = $getkodeticket;

 	$id_user = strtoupper(trim($this->input->post('id_user')));
 	$tanggal = $time = date("Y-m-d  H:i:s");

 	$id_sub_kategori = strtoupper(trim($this->input->post('id_sub_kategori')));
 	$problem_summary = strtoupper(trim($this->input->post('problem_summary')));
 	$problem_detail = strtoupper(trim($this->input->post('problem_detail')));
 	$id_teknisi = strtoupper(trim($this->input->post('id_teknisi')));
 	
 	$data['id_ticket'] = $ticket;
 	$data['reported'] = $id_user;
 	$data['tanggal'] = $tanggal;
 	$data['id_sub_kategori'] = $id_sub_kategori;
 	$data['problem_summary'] = $problem_summary;
 	$data['problem_detail'] = $problem_detail;
 	$data['id_teknisi'] = $id_teknisi;
 	$data['status'] = 1;
 	$data['progress'] = 0;

 	$tracking['id_ticket'] = $ticket;
 	$tracking['tanggal'] = $tanggal;
 	$tracking['status'] = "Created Ticket";
 	$tracking['deskripsi'] = "";
 	$tracking['id_user'] = $id_user;

 	$this->db->trans_start();

 	$this->db->insert('ticket', $data);
 	$this->db->insert('tracking', $tracking);

 	$this->db->trans_complete();

 	if ($this->db->trans_status() === FALSE)
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data gagal tersimpan.
			    </div>");
				redirect('myticket/myticket_list');	
			} else 
			{
				$this->session->set_flashdata("msg", "<div class='alert bg-success' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Data tersimpan.
			    </div>");
				redirect('myticket/myticket_list');		
			}
		
 }

 


    
}
