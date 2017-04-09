<?php

class Lang_switch extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	function switch_language($language = "") {
		$language = ($language != "") ? $language : "english";
		$this->session->set_userdata('site_lang', $language);
		redirect($_SERVER['HTTP_REFERER']);
	}
}