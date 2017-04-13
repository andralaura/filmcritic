<?php 
class Pages extends CI_Controller{

	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}

        $data['username'] = $this->session->userdata('username');

		if ($this->session->userdata('isUserLoggedIn')) {
            $this->load->view('templates/header_logged_in', $data);
        } else {
            $this->load->view('templates/header');
        }
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}