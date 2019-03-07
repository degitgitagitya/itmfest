<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('user/home/home');
        $this->load->view('user/footer');
    }

    public function logout(){

        session_destroy();

        header('Location: ' . base_url('Home'));

    }
}
