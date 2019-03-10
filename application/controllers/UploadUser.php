<?php

class UploadUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function do_upload()
    {

        $event = $this->input->post('event');
        $email = $this->input->post('email');
        $id = $this->input->post('id');

        $num = rand(0,10000000);


        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 500;
        $config['file_name']             = 'pembayaran_'.$event.'_'.$id.$num.'.jpg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('error'.$event => $this->upload->display_errors());

            if (isset($_SESSION['login'])){

                $data['user'] = $this->User->getByEmail($_SESSION['email']);
                $this->load->view('user/profile/profile', $data);
                $this->load->view('user/footer');

            }else {

                header('Location: ' . base_url('Home'));

            }
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->User->editPembayaranAttachment($id,$event,$config['file_name']);

            $data['sukses'] = "Bukti pembayaran telah di upload";

            if (isset($_SESSION['login'])){

                $data['user'] = $this->User->getByEmail($_SESSION['email']);
                $this->load->view('user/profile/profile', $data);
                $this->load->view('user/footer');

            }else {

                header('Location: ' . base_url('Home'));

            }
        }
    }

    public function do_upload2()
    {

        $event = $this->input->post('event');
        $email = $this->input->post('email');
        $id = $this->input->post('id');

        $num = rand(0,10000000);


        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 500;
        $config['file_name']             = 'attachment_'.$event.'_'.$id.$num.'.pdf';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('error'.$event => $this->upload->display_errors());

            if (isset($_SESSION['login'])){

                $data['user'] = $this->User->getByEmail($_SESSION['email']);
                $this->load->view('user/profile/profile', $data);
                $this->load->view('user/footer');

            }else {

                header('Location: ' . base_url('Home'));

            }
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->User->editAttachment($id,$event,$config['file_name']);

            $data['sukses'] = "Form pendaftaran telah di upload";

            if (isset($_SESSION['login'])){

                $data['user'] = $this->User->getByEmail($_SESSION['email']);
                $this->load->view('user/profile/profile', $data);
                $this->load->view('user/footer');

            }else {

                header('Location: ' . base_url('Home'));

            }
        }
    }

    public function do_upload3()
    {

        $event = $this->input->post('event');
        $email = $this->input->post('email');
        $linklagu = $this->input->post('linklagu');
        $id = $this->input->post('id');

        $num = rand(0,10000000);


        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 500;
        $config['file_name']             = 'attachment_'.$event.'_'.$id.$num.'.pdf';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('error'.$event => $this->upload->display_errors());

            if (isset($_SESSION['login'])){

                $data['user'] = $this->User->getByEmail($_SESSION['email']);
                $this->load->view('user/profile/profile', $data);
                $this->load->view('user/footer');

            }else {

                header('Location: ' . base_url('Home'));

            }
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->User->editAttachment($id,$event,$config['file_name']);

            $this->User->editLinkLagu($id,$linklagu);

            $data['sukses'] = "Form pendaftaran telah di upload";

            if (isset($_SESSION['login'])){

                $data['user'] = $this->User->getByEmail($_SESSION['email']);
                $this->load->view('user/profile/profile', $data);
                $this->load->view('user/footer');

            }else {

                header('Location: ' . base_url('Home'));

            }
        }
    }

    public function do_upload4()
    {

        $num = rand(0,10000000);


        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 220;
        $config['file_name']             = 'banner_'.$num.'.jpg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('error' => $this->upload->display_errors());

            $data['gambar'] = $this->MGambarHome->getGambar();

            $this->load->view('admin/dashboard/header');
            $this->load->view('admin/dashboard/beranda', $data);
            $this->load->view('admin/dashboard/footer');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->MGambarHome->insertGambar($config['file_name']);

            $data['sukses'] = "Gambar berhasil diperbaharui";

            $data['gambar'] = $this->MGambarHome->getGambar();

            $this->load->view('admin/dashboard/header');
            $this->load->view('admin/dashboard/beranda', $data);
            $this->load->view('admin/dashboard/footer');
        }
    }

    public function do_upload5()
    {

        $num = rand(0,10000000);

        $config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = 220;
        $config['file_name']             = 'berita_'.$num.'.jpg';

        $berita = array(

            "judul" => $this->input->post('judul'),
            "isi" => $this->input->post('isi'),
            "tanggal" => date("Y-m-d"),
            "gambar" => $config['file_name']

        );

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $data = array('error' => $this->upload->display_errors());

            $this->load->view('admin/dashboard/header');
            $this->load->view('admin/dashboard/addnews', $data);
            $this->load->view('admin/dashboard/footer');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->MNews->insertBerita($berita);

            $data['sukses'] = "Gambar berhasil ditambahkan";

            $this->load->view('admin/dashboard/header');
            $this->load->view('admin/dashboard/addnews', $data);
            $this->load->view('admin/dashboard/footer');
        }
    }
}
?>