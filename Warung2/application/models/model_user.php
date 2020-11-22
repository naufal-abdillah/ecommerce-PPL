<?php

class Model_user extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('user');
    }
    public function find($email)
    {
        $result = $this->db->where('email', $email)
            ->limit(1)
            ->get('user');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
