<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 11:51 AM
 */

class Pesan extends CI_Controller
{

    public function index(){

        $pesan = array(

            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "judul" => $this->input->post('judul'),
            "isi" => $this->input->post('isi')

        );

        $this->MPesan->insertPesan($pesan);

        header('Location: ' . base_url('Home'));

    }

}