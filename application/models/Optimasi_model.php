<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getNgetan1()
    {
        $query = "SELECT `ngetan1`.* ";
        return $this->db->query($query)->result_array();
    }
}
