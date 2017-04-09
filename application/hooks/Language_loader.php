<?php

/**
 * Created by PhpStorm.
 * User: siim
 * Date: 07.04.2017
 * Time: 22:24
 */
class Language_loader
{
	function initialize() {
		$ci =& get_instance();
		$ci->load->helper('language');

		$site_lang = $ci->session->userdata('site_lang');
		if ($site_lang) {
			$ci->lang->load('interface',$ci->session->userdata('site_lang'));
		} else {
			$ci->lang->load('interface','english');
		}
	}
}