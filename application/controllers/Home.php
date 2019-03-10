<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/home/home', $data);
        $this->load->view('user/footer');
    }

    public function logout(){

        session_destroy();

        header('Location: ' . base_url('Home'));

    }
}
