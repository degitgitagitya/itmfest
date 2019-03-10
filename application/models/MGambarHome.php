<?php
/**
 * Created by PhpStorm.
 * User: degit
 * Date: 3/10/2019
 * Time: 11:50 AM
 */

class MGambarHome extends CI_Model
{

    public function getGambar(){

        $this->db->where('status', 1);
        $response = $this->db->get('gambarhome')->result();

        return $response;

    }

    public function insertGambar($nama){

        $this->db->where('status',1);
        $this->db->set('status',0);
        $this->db->update('gambarhome');

        $gambar = array(

            "nama" => $nama,
            "status" => 1

        );

        $this->db->insert('gambarhome', $gambar);

    }

}