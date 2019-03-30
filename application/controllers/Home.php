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

    public function test(){

        $config['protocol'] = "smtp";
        $config['smtp_host'] = "mail.itmfest.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "admin@itmfest.com";
        $config['smtp_pass'] = "MtrS5EiWpSiD2Yy";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        $this->email->from('admin@itmfest.com', 'ITM Festival 2019');
        $this->email->to('degitgitagitya@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }

    }
}
