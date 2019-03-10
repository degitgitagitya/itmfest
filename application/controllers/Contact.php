<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 11:38 AM
 */

class Contact extends CI_Controller
{

    public function index(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/contact/contact', $data);
        $this->load->view('user/footer');

    }

}