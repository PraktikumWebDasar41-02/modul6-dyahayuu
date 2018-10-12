<form>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td><input type="submit" name="kirim" value="submit"></td>
	</tr>
</form>

<?php  

	if (isset($_POST['kirim'])) {
		session_start();
		if (empty($nim)) {
			echo "NIM tidak boleh kosong<br>";
			$cek = false;
		}else{
			if (strlen($nim)!=10 && !is_numeric($nim)) {
				echo "NIM Harus 10 digit dan angka<br>";
				$cek = false;
			}
		}
	if (empty($nama)) {
			echo "Nama tidak boleh kosong<br>";
			$cek = false;
		}else{
			if (strlen($nama)>35) {
				echo "Maksimal panjang nama 35 huruf<br>";
				$cek = false;
			}	
		}

			$syntax = mysqli_query($koneksi,"SELECT * FROM 'tb_jurnal6' WHERE nim='$nim'");
			$cek=mysqli_num_rows($syntax);
			if ($cek>0) {
				echo "Berhasill";
				header("location :tampil.php");

		}
	}



?>