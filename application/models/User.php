<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 9:57 AM
 */

class User extends CI_Model{

    public function insertUser($user){


        $this->db->insert('user',$user);

    }

    public function getByEmail($email){

        $this->db->where('email', $email);
        $response = $this->db->get('user')->result();

        return $response;

    }

    public function getById($id){

        $this->db->where('id', $id);
        $response = $this->db->get('user')->result();

        return $response;

    }

    public function getUser($email,$password){

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $response = $this->db->get('user')->result();

        return $response;
    }

    public function getAll(){

        return $this->db->get('user')->result();

    }

    public function changeStatusEvent($id, $event, $status){

        $this->db->where('id', $id);
        $this->db->set($event,$status);
        $this->db->update('user');

    }

    public function editPembayaranAttachment($id,$event,$nama){


        $this->db->where('id', $id);
        $this->db->set('pembayaran'.$event,$nama);
        $this->db->update('user');


    }

    public function editAttachment($id, $event, $nama){

        $this->db->where('id', $id);
        $this->db->set('attachment'.$event,$nama);
        $this->db->update('user');

    }

    public function editLinkLagu($id, $nama){

        $this->db->where('id', $id);
        $this->db->set('linklagu',$nama);
        $this->db->update('user');

    }

    public function editFotoLomba($id, $nama){

        $this->db->where('id', $id);
        $this->db->set('fotolomba',$nama);
        $this->db->update('user');

    }

    public function editLinkCanvas($id, $nama){

        $this->db->where('id', $id);
        $this->db->set('linkcanvas',$nama);
        $this->db->update('user');

    }

    public function getByLomba($event){

        $this->db->where('pembayaran'.$event.'!=','');
        $response = $this->db->get('user')->result();

        return $response;

    }


}
