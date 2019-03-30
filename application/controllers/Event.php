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

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/event/headerevent', $data);
        $this->load->view('user/event/event');
        $this->load->view('user/footer');

    }

    public function eventDetailPPP(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/event/headerevent', $data);
        $this->load->view('user/event/eventPPP');
        $this->load->view('user/footer');

    }

    public function eventDetailSeminar(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/event/headerevent', $data);
        $this->load->view('user/event/eventSeminar');
        $this->load->view('user/footer');

    }

    public function eventDetailKompetisiPariwisata(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/event/headerevent', $data);
        $this->load->view('user/event/eventKompetisiPariwisata');
        $this->load->view('user/footer');

    }

    public function eventDetailBMC(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/event/headerevent', $data);
        $this->load->view('user/event/eventBMC');
        $this->load->view('user/footer');

    }

    public function eventDetailPhoto(){

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('user/event/headerevent', $data);
        $this->load->view('user/event/eventPhoto');
        $this->load->view('user/footer');

    }

    public function check(){

        if (isset($_SESSION['login'])){

            header('Location: ' . base_url('Profile'));

        }else{

            header('Location: ' . base_url('Login'));

        }


    }


}