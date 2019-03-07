<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 2:42 PM
 */

class Profile extends CI_Controller
{

    public function index(){

        if (isset($_SESSION['login'])){

            $data['user'] = $this->User->getByEmail($_SESSION['email']);
            $this->load->view('user/profile/profile', $data);
            $this->load->view('user/footer');

        }else {
            
            header('Location: ' . base_url('Home'));

        }



    }

}