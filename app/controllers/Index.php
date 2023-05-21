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
		if(isset($_POST['aksi'])) $data['aksi'] =$_POST['aksi'];
		else $data['aksi'] ='';
		if(isset($_POST['id'])) $data['id'] =$_POST['id'];
		else $data['id'] ='';
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