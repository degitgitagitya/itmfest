<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/10/2019
 * Time: 11:50 AM
 */

class MAdmin extends CI_Model
{

    public function checkAdmin($username, $password){

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $response = $this->db->get('admin')->result();

        return $response;

    }

}