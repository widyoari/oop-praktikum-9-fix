<form action="?" method="POST"> 
	<table class="table table-striped">
		<tr><td>NIM</td><td>:</td><td>
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
			<input type="text" name="nim" value="<?php echo $data['nim']; ?>" /></td>
		</tr>
		<tr><td>NAMA</td><td>:</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"/></td>
		</tr>
		<tr><td>ALAMAT</td><td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"/></td>
		</tr>
		<tr><td></td><td colspan="2">
			<input type="submit" name='simpan' value="simpan"/>
			<input type="submit" name='update' value="update"/>
			<input type="submit" name='reset' value="reset"/>
			<input type="submit" name='cari' value="cari"/>
			</td></tr>
	</table>
</form>
<table class="table table-bordered">
    <tr>
      	<td>ID</td>
	    <td>NIM</td>
	    <td>NAMA</td>
	    <td>ALAMAT</td>
	    <td>AKSI</td>
	</tr>

<?php foreach ($rows_mhsw as $row) { ?>
	<tr>
	    <td><?php echo $row['mhsw_id']; ?></td>
	    <td><?php echo $row['mhsw_nim']; ?></td>
	    <td><?php echo $row['mhsw_nama']; ?></td>
	    <td><?php echo $row['mhsw_alamat']; ?></td>
	    <td><a href="?mhsw_id=<?php echo $row['mhsw_id']; ?>&aksi=hapus">Hapus</a>
	    &nbsp;&nbsp;&nbsp;
	    <a href="?mhsw_id=<?php echo $row['mhsw_id']; ?>&aksi=lihat_update">Update</a></td>
	</tr>
	    <?php } ?>
</table>