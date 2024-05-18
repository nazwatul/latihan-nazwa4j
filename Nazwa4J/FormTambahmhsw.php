<h2>Tambah Data Mahasiswa</h2>
<!-- tag form -->
<form action="Save.php" method="POST">
     <tabel width= "80%" cellpandding="5">
     <td width="20%"><label>Nomor Induk Mahasiswa :</label></td>
     <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" required>
<br>
    <label>Nama Mahasiswa :</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
</br>
    <label for="">Alamat :</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
<br>
    <label for="">Program Studi :</label></td>
     <select name="prodi" id="prodi"></td>
    <option value="Sistem Informasi" selected>Sistem Informasi</option>
    <option value="Sistem Komputer">Sistem Komputer</option>
    <option value="Teknik Informatika">Teknik Infomatika</option>
</select>
</br>
     <td><label for="">Umur :</label></td>
     <td><input type="number" name="umur" id="umur" required></td>
<br>
<tr>
  <td><button type="submit" name="kirim" value="kirim">Kirim Data</button></td>
 </tr>
</tabel>
</form>