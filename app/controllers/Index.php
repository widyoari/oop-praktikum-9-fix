<?php 

namespace App\Controllers;
// Panggil controller
use App\Core\Controller;
use App\Models\Mahasiswa;

class Index extends Controller
{
	
	public function index()
	{
		if(isset($_POST['simpan'])) $data['simpan'] =$_POST['simpan'];
		else $data['simpan'] ='';
		if(isset($_POST['update'])) $data['update'] =$_POST['update'];
		else $data['update'] ='';
		if(isset($_POST['reset'])) $data['reset'] =$_POST['reset'];
		else $data['reset'] ='';
		if(isset($_POST['cari'])) $data['cari'] =$_POST['cari'];
		else $data['cari'] ='';
		if(isset($_GET['aksi'])) $data['aksi'] =$_GET['aksi'];
		else $data['aksi'] ='';
		if(isset($_GET['mhsw_id'])) $data['id'] =$_GET['mhsw_id'];
		else $data['id'] ='';
		if(isset($_POST['id'])) $data['id_update'] =$_POST['id'];
		else $data['id_update'] ='';		
		if(isset($_POST['nim'])) $data['nim'] =$_POST['nim'];
		else $data['nim'] ='';
		if(isset($_POST['nama'])) $data['nama'] =$_POST['nama'];
		else $data['nama'] ='';
		if(isset($_POST['alamat'])) $data['alamat'] =$_POST['alamat'];
		else $data['alamat'] ='';

		$mhsw = new Mahasiswa();
		if($data['cari']=="cari")  {
		   $rows_mhsw = $mhsw->tampil_cari($data['nim'],$data['nama'],$data['alamat']);
		}else {
			$rows_mhsw = $mhsw->tampil();			
		}
		if($data['simpan']=="simpan")  {
		   $mhsw->simpan($data['nim'],$data['nama'],$data['alamat']);
		   $rows_mhsw = $mhsw->tampil();
		}		
		if($data['aksi']=="hapus")  {
		    $mhsw->hapus($data['id']);
		    $rows_mhsw = $mhsw->tampil();
		}
		if($data['aksi']=="lihat_update")  {
		    $data = $mhsw->tampil_update($data['id']);
		    $rows_mhsw = $mhsw->tampil();
		}	
		if(isset($data['update'])=="update")  {
		   $mhsw->update($data['id_update'], $data['nim'],$data['nama'],$data['alamat']);
		   $rows_mhsw = $mhsw->tampil();
		}			
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->webboard('index/index', $data, $rows_mhsw);
	}

	public function show()
	{
		$data['row_show'] = "Ini file app/controllers/Index.php - show()";
		$this->webboard('index/show', $data, $rows_mhsw ='');
	}

	public function detail($id)
	{
		$data['row_detail'] = "Ini file app/controllers/Index.php - detail() - " . $id;
		$this->webboard('index/detail', $data, $rows_mhsw ='');
	}
}