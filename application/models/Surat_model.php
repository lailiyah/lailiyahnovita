<?php

class Surat_model extends CI_Model
{   
    public function daftar_surat(){
        $daftar_surat = $this->db->get('surat_masuk');
        return $daftar_surat->result();
    }
}

