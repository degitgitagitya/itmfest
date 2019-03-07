<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 2:20 PM
 */

class Event extends CI_Controller
{

    public function index(){

        $this->load->view('user/event/event');
        $this->load->view('user/footer');

    }


}