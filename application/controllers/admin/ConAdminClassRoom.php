<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConAdminClassRoom extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/ModAdminClassRoom');
		if ($this->session->userdata('fullname') == '' && $this->session->userdata('status') == "user") {		
			redirect('Login','refresh');
		}

    }

    public function AdminClassMain(){   

        $DBpersonnel = $this->load->database('personnel', TRUE);
        
        
		$data['title'] = "ห้องเรียน/ที่ปรึกษา";		
		$this->db->select('*');
        $this->db->from('tb_regclass');
        $this->db->join($DBpersonnel->database.'.tb_personnel','tb_personnel.pers_id = tb_regclass.class_teacher');
		$this->db->order_by('Reg_Class','ASC');
        $data['classRoom'] = $this->db->get()->result();
        
        $data['NameTeacher'] = $DBpersonnel->select('pers_id,pers_prefix,pers_firstname,pers_lastname,pers_position')
        ->from('tb_personnel')
        ->where('pers_position !=','posi_001')
        ->where('pers_position !=','posi_002')
        ->where('pers_position !=','posi_007')
        ->order_by('pers_learning')
        ->get()->result();

        $this->load->view('admin/layout/Header.php',$data);
        $this->load->view('admin/AdminClassRoom/AdminClassRoomMain.php');
        $this->load->view('admin/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }
    
    public function AddClassRoom(){   
        $dataClassRoom = array('Reg_Year'=>$this->input->post('year'),
                                'Reg_Class'=>$this->input->post('classroom'),
                                'class_teacher'=>$this->input->post('teacher'));
        print_r($this->ModAdminClassRoom->ClassRoom_Add($dataClassRoom));
    }

}


?>
