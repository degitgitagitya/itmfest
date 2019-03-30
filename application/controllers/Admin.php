<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 4:34 PM
 */

class Admin extends CI_Controller
{

    public function index(){

        $this->load->view('admin/login/header');
        $this->load->view('admin/login/login2');
        $this->load->view('admin/login/footer');

    }

    public function validateAdmin(){

        if (!isset($_SESSION['admin'])){

            session_destroy();

            header('Location: ' . base_url('Admin'));

        }
    }

    public function changeStatus($id, $event, $status){

        $this->validateAdmin();

        $this->User->changeStatusEvent($id, $event, $status);

        $this->getUser($id);

    }

    public function home(){

        if (isset($_SESSION['admin'])){

            $data['users'] = $this->User->getAll();

            $this->load->view('admin/dashboard/header');
            $this->load->view('admin/dashboard/dashboard', $data);
            $this->load->view('admin/dashboard/footer');

        }else {

            $data['error'] = "Silahkan login";

            $this->load->view('admin/login/header');
            $this->load->view('admin/login/login2', $data);
            $this->load->view('admin/login/footer');

        }



    }

    public function getUser($id){

        $this->validateAdmin();

        $data['user'] = $this->User->getById($id);

        $this->load->view('admin/dashboard/header');
        $this->load->view('admin/dashboard/profile', $data);
        $this->load->view('admin/dashboard/footer');

    }


    public function validation(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->MAdmin->checkAdmin($username, $password);

        if ($admin == null){

            $data['error'] = "Password / Username salah";

            $this->load->view('admin/login/header');
            $this->load->view('admin/login/login2', $data);
            $this->load->view('admin/login/footer');

        }else {

            $_SESSION['admin'] = true;

            header('Location: ' . base_url('Admin/home'));

        }

    }

    public function logout(){

        session_destroy();

        header('Location: ' . base_url('Admin'));

    }

    public function contact(){

        $this->validateAdmin();

        $data['contact'] = $this->MContact->getAllContact();

        $this->load->view('admin/dashboard/header');
        $this->load->view('admin/dashboard/contact', $data);
        $this->load->view('admin/dashboard/footer');
    }

    public function beranda(){

        $this->validateAdmin();

        $data['gambar'] = $this->MGambarHome->getGambar();

        $this->load->view('admin/dashboard/header');
        $this->load->view('admin/dashboard/beranda', $data);
        $this->load->view('admin/dashboard/footer');

    }

    public function news(){

        $this->validateAdmin();

        $data['news'] = $this->MNews->getAllNews();

        $this->load->view('admin/dashboard/header');
        $this->load->view('admin/dashboard/news', $data);
        $this->load->view('admin/dashboard/footer');

    }

    public function getNews($id){

        $this->validateAdmin();

        $data['news'] = $this->MNews->getById($id);

        $this->load->view('admin/dashboard/header');
        $this->load->view('admin/dashboard/newsdetail', $data);
        $this->load->view('admin/dashboard/footer');

    }

    public function addNews(){

        $this->validateAdmin();

        $this->load->view('admin/dashboard/header');
        $this->load->view('admin/dashboard/addnews');
        $this->load->view('admin/dashboard/footer');

    }

    public function deleteNews($id){

        $this->MNews->deleteBerita($id);

        header('Location: ' . base_url('Admin/news'));

    }

    public function competition($event){
        if (isset($_SESSION['admin'])){

            $data['users'] = $this->User->getByLomba($event);
            $data['event'] = $event;

            $this->load->view('admin/dashboard/header');
            $this->load->view('admin/dashboard/dashboardcompetition', $data);
            $this->load->view('admin/dashboard/footer');

        }else {

            $data['error'] = "Silahkan login";

            $this->load->view('admin/login/header');
            $this->load->view('admin/login/login2', $data);
            $this->load->view('admin/login/footer');

        }
    }

}