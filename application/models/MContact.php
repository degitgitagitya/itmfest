<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/10/2019
 * Time: 11:50 AM
 */

class MContact extends CI_Model
{

    public function getAllContact(){

        return $this->db->get('pesan')->result();
    }

}