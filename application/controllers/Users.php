<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('user');
	}

	public function login(){
		$data = array();
		if($this->session->userdata('success_msg')){
			$data['success_msg'] = $this->session->userdata('success_msg');
			$this->session->unset_userdata('success_msg');
		}
		if($this->session->userdata('error_msg')){
			$data['error_msg'] = $this->session->userdata('error_msg');
			$this->session->unset_userdata('error_msg');
		}
		if($this->input->post('loginSubmit')){
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == true) {
				$con['returnType'] = 'single';
				$con['conditions'] = array(
					'username'=>$this->input->post('username'),
					'password' => md5($this->input->post('password')),
				);
				$checkLogin = $this->user->getRows($con);
				if($checkLogin){
					$this->session->set_userdata('isUserLoggedIn',TRUE);
					$this->session->set_userdata('userId',$checkLogin['id']);
					redirect($_SERVER['HTTP_REFERER']); // todo httpreferer siia panna? $_SERVER['HTTP_REFERER']
				}else{
					$data['error_msg'] = 'Wrong email or password, please try again.';
				}
			}
		}

		$this->load->view('templates/header');
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer');
	}

	public function registration(){
		$data = array();
		$userData = array();
		if($this->input->post('regisSubmit')){
			$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('conf_password', 'Confirm password', 'required|matches[password]');

			$userData = array(
				'username' => strip_tags($this->input->post('username')),
				'email' => strip_tags($this->input->post('email')),
				'password' => md5($this->input->post('password')),
			);

			if($this->form_validation->run() == true){
				$insert = $this->user->insert($userData);
				if($insert){
					$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
					redirect('users/login');
				}else{
					$data['error_msg'] = 'Some problems occured, please try again.';
				}
			}
		}
		$data['user'] = $userData;

		$this->load->view('templates/header');
		$this->load->view('users/registration', $data);
		$this->load->view('templates/footer');
	}

	public function logout(){
		$this->session->unset_userdata('isUserLoggedIn');
		$this->session->unset_userdata('userId');
		$this->session->sess_destroy();
		redirect('users/login/');
	}

	public function email_check($str){
		$con['returnType'] = 'count';
		$con['conditions'] = array('email'=>$str);
		$checkEmail = $this->user->getRows($con);
		if($checkEmail > 0){
			$this->form_validation->set_message('email_check', 'The given email already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function username_check($str){
		$con['returnType'] = 'count';
		$con['conditions'] = array('username'=>$str);
		$checkUsername = $this->user->getRows($con);
		if($checkUsername > 0){
			$this->form_validation->set_message('username_check', 'The given username already exists.');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}