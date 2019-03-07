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

        $this->load->view('user/contact/contact');
        $this->load->view('user/footer');

    }

}