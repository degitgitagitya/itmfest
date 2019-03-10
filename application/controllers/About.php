<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 2:42 PM
 */

class About extends CI_Controller
{

    public function index(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/about/about', $data);
        $this->load->view('user/footer');

    }

}