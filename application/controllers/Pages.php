<?php 
class Pages extends CI_Controller{

	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}

		$data = array();
		$data['google_maps_key'] = file_get_contents('./api_keys/google_maps.txt');
		//$data['title'] = 'mingi title lehele';

        $this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}