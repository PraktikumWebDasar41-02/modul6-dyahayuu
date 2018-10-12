<form action="" method="post">
	<table align="center">
		<tr>
			<td colspan="3" align="center"><h2>Data Diri</h2></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td><br>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td> 
			<td><input type="text" name="nama"></td><br>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td>
				<input type="radio" name="kelas" value="41-01">
				41-01</td>
				<td><input type="radio" name="kelas" value="41-02">41-02</td>
				
				<td><input type="radio" name="kelas" value="41-03">41-03</td>
				
				<td><input type="radio" name="kelas" value="41-04">41-04</td>
				
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jeniskelamin" value="Laki-laki">
				Laki-laki</td>
				<td><input type="radio" name="jeniskelamin" value="perempuan">
				perempuan</td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="musik">Musik</td>
			<td><input type="checkbox" name="hobi" value="olahraga">Olahraga</td>
			<td><input type="checkbox" name="hobi" value="Tidur">Tidur</td>
		</tr>
	
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
					<option value="">==Pilih Fakultas==</option>
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FRI">FRI</option>
					<option value="FTE">FTE</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
				</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>	<textarea placeholder="Masukkan Alamat Disini" name="alamat"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td><br>
		</tr>
	</table>
</form>

<?php
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$hobi = $_POST['hobi'];
	
		$cek = true;


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

		if (isset($_POST['kelas'])) {
			$kelas = $_POST['kelas'];	
		}
		if (isset($_POST['jeniskelamin'])) {
			$jeniskelamin = $_POST['jeniskelamin'];	
		}
		$fakultas = $_POST ['fakultas'];

		if ($_POST['alamat']>50 || $_POST['alamat']=="") {
			echo "Tulis alamat";
		} else{
			$alamat = $_POST['alamat'];
		}

				if ($cek) {
			
			$sql = "INSERT INTO tb_jurnal6 values ('$nim','$nama','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat') ";
			mysqli_query($koneksi, $sql);
			$syntax = mysqli_query($koneksi,"SELECT * FROM tb_jurnal6");
			$arr = mysqli_fetch_array($syntax);
			if (isset($sql)) {
				echo "data berhasil";
				header("Location:login.php");
			}
			else{
				echo "Data tidak berhasil";
			}
			
		}
		
	}

?>
