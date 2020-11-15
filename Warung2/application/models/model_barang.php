<?php

class Model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('warung_barang');
    }
    public function find($id){
        $result = $this->db->where('id_barang',$id)
                           ->limit(1)
                           ->get('warung_barang');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }
}