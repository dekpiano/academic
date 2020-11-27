<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConUser_Home extends CI_Controller {
var  $title = "แผงควบคุม";
	public function __construct() {
		parent::__construct();
		
		if ($this->session->userdata('fullname') == ''  || $this->session->userdata('status') == "admin") {
			redirect('Login','refresh');
		}

    }


    public function Home(){      
        
        $data['CheckOnOff'] = $this->db->select('*')->from('tb_register_onoff')->get()->result();
        $this->load->view('user/layout/Header.php',$data);
        $this->load->view('user/PageHome.php');
        $this->load->view('user/layout/Footer.php');

        // delete_cookie('username_cookie'); 
		// delete_cookie('password_cookie'); 
        // $this->session->sess_destroy();
        
    }



}


?>
