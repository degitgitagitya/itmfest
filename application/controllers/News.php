<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 11:38 AM
 */

class News extends CI_Controller
{

    public function index(){

        $data['news'] = $this->MNews->getAllNews();


        $this->load->view('user/news/newsheader');
        $this->load->view('user/news/news', $data);
        $this->load->view('user/footer');

    }

    public function detail($id){

        $data['news'] = $this->MNews->getById($id);


        $this->load->view('user/news/newsheader');
        $this->load->view('user/news/newsdetail', $data);
        $this->load->view('user/footer');

    }

}