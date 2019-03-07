<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 1:42 PM
 */

class MNews extends CI_Model
{

    public function getAllNews(){

        $response = $this->db->get('news')->result();

        return $response;
    }


}