<?php

class Model_barang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('barang');
    }
    public function find($id)
    {
        $result = $this->db->where('idBarang', $id)
            ->limit(1)
            ->get('barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function barangSeller($id)
    {
        return $this->db->where('idSeller', $id)
            ->get('barang');
    }
    public function delete($id)
    {
        $this->db->delete('barang', array('idBarang' => $id));
    }
}
