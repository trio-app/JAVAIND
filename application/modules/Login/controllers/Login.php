<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
        function __construct(){
            parent::__construct();
            $this->load->model('Mlogin');
        }

	public function index(){
		$this->load->view('Login/Vlogin');
	}
        
        public function signin(){
		$username = $this->input->post('userNama');
		$password = $this->input->post('userPass');
		$where = array(
			'userId' => $username,
			'userPass' => md5($password)
			);

		$cek = $this->Mlogin->cek_login('cp_user', $where);
		
		if(count($cek) > 0){
			$data_session = array(
				'userNo' => $cek['userNo'],
				'userId' => $cek['userId'],
				'userNama' => $cek['userNama'],
				'userAccess' => $cek['userAccess'],
				'userGroup' => $cek['userGroup'],
				'userStatus' => 'login',
				);

			$this->session->set_userdata($data_session);
			redirect(base_url('Home'));

		}else{

			echo "<script>
			alert('Username atau Password Salah');
			window.history.back();
			</script>";

		}
        }
        
        public function signout(){
            $array_items = array('userNama', 'userAccess','userGroup','userStatus');
            $this->session->unset_userdata($array_items);
            redirect('login');
        }
}
