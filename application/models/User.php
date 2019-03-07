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

    public function getUser($email,$password){

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $response = $this->db->get('user')->result();

        return $response;
    }


}
