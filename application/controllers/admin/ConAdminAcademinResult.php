<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConAdminAcademinResult extends CI_Controller {
var  $title = "แผงควบคุม";
	public function __construct() {
        parent::__construct();
        $this->load->model('admin/ModAdminAcademinResult');
		
		if ($this->session->userdata('fullname') == '' && $this->session->userdata('status') == "user") {		
			redirect('Login','refresh');
		}

    }

    public function AdminAcademinResultMain(){   

        $data['title'] = "ผลการเรียน";	
        $data['checkOnOff'] = $this->db->select('*')->from('tb_register_onoff')->get()->result();
        $this->load->view('admin/layout/Header.php',$data);
        $this->load->view('admin/AdminAcademicResult/AdminAcademicResultMain.php');
        $this->load->view('admin/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }
    
    public function CheckOnOff(){   
        echo $this->ModAdminAcademinResult->UpdateOnOff($this->input->post('check'));

    }

    public function add(){   

		$data['title'] = "ตารางเรียน";
		$data['icon'] = '<i class="far fa-plus-square"></i>';
		$data['color'] = 'primary';
		
		$this->db->select('*');
		$this->db->from('tb_class_schedule');
		$this->db->order_by('schestu_id','DESC');
		$data['class_schedule'] = $this->db->get()->result();
		
		$num = @explode("_", $data['class_schedule'][0]->schestu_id);
        $num1 = @sprintf("%03d",$num[1]+1);
        $data['class_schedule'] = 'schestu_'.$num1;
        $data['action'] = 'insert_class_schedule';

        $this->load->view('admin/layout/Header.php',$data);
        $this->load->view('admin/AdminClassSchedule/AdminClassScheduleForm.php');
        $this->load->view('admin/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }
    

}


?>
