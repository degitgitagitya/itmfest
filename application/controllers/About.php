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

        $this->load->view('user/about/about');
        $this->load->view('user/footer');

    }

}