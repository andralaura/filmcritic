<?php


class Add_movie extends CI_Controller {
    public function view() {
        if (! $this->session->userdata('isUserLoggedIn')) {
            redirect("users/login");
        }

        $data['username'] = $this->session->userdata('username');
        if ($this->session->userdata('isUserLoggedIn')) {
            $this->load->view('templates/header_logged_in', $data);
        } else {
            $this->load->view('templates/header');
        }
        $this->load->view('pages/add_movie', $data);
        $this->load->view('templates/footer');
    }
}