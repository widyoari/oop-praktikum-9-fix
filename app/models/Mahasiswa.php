<?php
namespace App\Models;
// Panggil controller
use App\Core\Model;

 class Mahasiswa extends Model {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_mhsw";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
            }
        return $data;
    }

    public function tampil_cari($nim,$nama,$alamat)
    {
        if($nim!='') $a = "or mhsw_nim like '%".$nim."%' ";
        else $a = '';
        if($nama!='') $b = "or mhsw_nama like '%".$nama."%' ";
        else $b = '';        
        if($alamat!='') $c = "or mhsw_alamat like '%".$alamat."%' ";
        else $c = ''; 
        $sql = "SELECT * FROM tb_mhsw where mhsw_id is null $a $b $c";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
            }
        return $data;
    }   
 }