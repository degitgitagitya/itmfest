<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 8:44 AM
 */

class Login extends CI_Controller
{

    public function index(){

        $this->load->view('user/login/header');
        $this->load->view('user/login/login');
        $this->load->view('user/login/footer');

    }

    public function register(){

        $this->load->view('user/login/header');
        $this->load->view('user/login/register');
        $this->load->view('user/login/footer');

    }

    public function submitLogin(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $response = $this->User->getUser($email,$password);

        if ($response == null){

            $data['error'] = "Password / Email salah";

            $this->load->view('user/login/header');
            $this->load->view('user/login/login', $data);
            $this->load->view('user/login/footer');

        }else {

            $_SESSION['login'] = true;
            $_SESSION['email'] = $response[0]->email;

            header('Location: ' . base_url('Home'));

        }


    }

    public function submitRegistration(){

        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');

        $email = $this->input->post('email');

        if ($password != $password2){

            $data['error'] = "Password tidak match";

            $this->load->view('user/login/header');
            $this->load->view('user/login/register', $data);
            $this->load->view('user/login/footer');

        }else{

            $response = $this->User->getByEmail($email);

            if ($response != null){

                $data['error'] = "Email sudah digunakan";

                $this->load->view('user/login/header');
                $this->load->view('user/login/register', $data);
                $this->load->view('user/login/footer');

            }else{

                $user = array(

                    "email" => $this->input->post('email'),
                    "nama" => $this->input->post('nama'),
                    "password" => $this->input->post('password'),
                    "jeniskelamin" => $this->input->post('jeniskelamin'),
                    "provinsiasal" => $this->input->post('provinsiasal'),
                    "tempatlahir" => $this->input->post('tempatlahir'),
                    "tanggallahir" => $this->input->post('tanggallahir'),
                    "umur" => $this->input->post('umur'),
                    "notelp" => $this->input->post('notelp'),
                    "idline" => $this->input->post('idline'),
                    "idinstagram" => $this->input->post('idinstagram'),
                    "instansi" => $this->input->post('instansi'),
                    "pariwisata" => $this->input->post('pariwisata'),
                    "event1" => 0,
                    "event2" => 0,
                    "event3" => 0,
                    "event4" => 0,
                    "event5" => 0

                );

                $this->User->insertUser($user);

                $this->index();

            }
        }
    }

    public function test(){

        session_destroy();

    }

}