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

    public function simpan($nim,$nama,$alamat)
    {
        try {
            $sql = "insert into tb_mhsw values ('','$nim','$nama','SI','$alamat', NOW(), NOW())";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            echo "DATA BERHASIL DISIMPAN !";
        } catch (Exception $e) {
            die ("Maaf Error, " . $e->getMessage());
        }
    } 
    public function hapus($id)
    {
        try {
            $sqls = "delete from tb_mhsw where mhsw_id=$id";
            $stmts = $this->db->prepare($sqls);
            $stmts->execute();
            echo "DATA BERHASIL DIHAPUS !";
         } catch (Exception $e) {
            die ("Maaf Error, " . $e->getMessage());
        }       
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

    public function tampil_update($id)
    {
        $sql = "SELECT * FROM tb_mhsw where mhsw_id='".$id."'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];
        $rows = $stmt->fetch();
        $data['id'] = $rows['mhsw_id'];
        $data['nim'] = $rows['mhsw_nim'];
        $data['nama'] = $rows['mhsw_nama'];
        $data['alamat'] = $rows['mhsw_alamat'];
        return $data;
    }     
    public function update($id, $nim,$nama,$alamat)
    {
        try {        
            $sql = "update tb_mhsw set mhsw_nim='".$nim."', mhsw_nama='".$nama."', mhsw_alamat='".$alamat."' where mhsw_id='".$id."'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            echo "DATA BERHASIL DIUPDATE !";
        } catch (Exception $e) {
            die ("Maaf Error, " . $e->getMessage());
        }  
    }      
 }