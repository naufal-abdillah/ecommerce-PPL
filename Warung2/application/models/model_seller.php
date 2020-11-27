<?php

class Model_seller extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('seller');
    }
    public function find($email)
    {
        $result = $this->db->where('email', $email)
            ->limit(1)
            ->get('seller');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
