<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/7/2019
 * Time: 11:54 AM
 */

class MPesan extends CI_Model
{

    public function insertPesan($pesan){

        $this->db->insert('pesan',$pesan);

    }

}