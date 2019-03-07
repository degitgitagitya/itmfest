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

        $this->load->view('user/event/headerevent');
        $this->load->view('user/event/event');
        $this->load->view('user/footer');

    }

    public function eventDetailPPP(){

        $this->load->view('user/event/headerevent');
        $this->load->view('user/event/eventPPP');
        $this->load->view('user/footer');

    }

    public function eventDetailSeminar(){

        $this->load->view('user/event/headerevent');
        $this->load->view('user/event/eventSeminar');
        $this->load->view('user/footer');

    }

    public function eventDetailKompetisiPariwisata(){

        $this->load->view('user/event/headerevent');
        $this->load->view('user/event/eventKompetisiPariwisata');
        $this->load->view('user/footer');

    }


}