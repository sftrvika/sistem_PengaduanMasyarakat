<html>
<head>
<title>Sistem Pengaduan Masyarakat Desa Timbulharjo</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="pendaftaran siswa baru, penerimaan siswa baru, sistem psb, psb sma, psb smu, psb online">
<meta name="description" content="Website Sistem Penerimaan Siswa Baru (PSB) Online SMA Teladan Way Jepara, Lampung Timur. Anda bagi lulusan SMP dimanapun berhak menjadi calon siswa baru di SMA Teladan Way Jepara">
<body topmargin="3">
<table width="798" class="border" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td colspan="3" bgcolor="#009900"><img src="gambar/header1.jpg" height="100"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="3"><table width="798" class="border" bordercolor="#009999" align="center" cellpadding="0" cellspacing="0">
      <tr class="ListBack">
        <td width="597" height="25" valign="middle" ><img src="gambar/ikon.png" width="9" height="9"> <a href="index.php" target="_self" class="katlink">Beranda</a> | 
          <a href="tentang.php" target="_self" class="katlink">Tentang</a> | 
          <a href="kontak.php" target="_self" class="katlink">Kontak</a> |
          <a href="data/masyarakat/masyarakat.php" target="_self" class="katlink">Data Admin</a> |
          <a href="report.php" target="_self" class="katlink">Report</a> |
          <a href="logout.php" target="_self" class="katlink">Logout</a>
        </td>
        <td width="199" align="right">&nbsp;<img src="gambar/ikon.png" width="9" height="9"><b>
          <script language=JavaScript> document.write (hari)</script>
        </b> Tanggal <b><?php echo date('d-M-Y');?></b></td>
      </tr>
  </table>
  <table width="100%">
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="100%" valign="top" bgcolor="#FFFFFF" class="BorderUtama">
      <br><h2>REKAP DATA PENGADUAN MASYARAKAT</h2><br>
      <table width="100%" class="BorderUtama" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <th>No.</th>
            <th>ID PETUGAS</th>
            <th>NAMA PETUGAS</th>
            <th>TELEPON</th>
            <th>LEVEL</th>
            <th>TANGGAL PENGADUAN</th>
            <th>ISI LAPORAN</th>
            <th>FOTO</th>
            <th>TANGGAL TANGGAPAN</th>
            <th>STATUS</th>
            <th>TANGGAPAN</th>
          </tr>
            <?php 
              include("librari/koneksi.php");
              $query = mysql_query("SELECT * FROM tanggapan 
                INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas
                INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan
                ") or die(mysql_error());
              if(mysql_num_rows($query) == 0){ ?>
                <tr><td colspan="8" align="center">Tidak ada data</td></tr>
              <?php }
              else{
                $no =1;
                while($data = mysql_fetch_assoc($query)){
                ?>
              <tr>
                <td class="garis"><?php echo $no ?></td>
                <td class="garis"><?php echo $data['id_petugas'] ?></td>
                <td class="garis"><?php echo $data['nama_petugas'] ?></td>
                <td class="garis"><?php echo $data['telp'] ?></td>
                <td class="garis"><?php echo $data['level'] ?></td>
                <td class="garis"><?php echo $data['tgl_pengaduan'] ?></td>
                <td class="garis"><?php echo $data['isi_laporan'] ?></td>
                <td class="garis"><img src="data/pengaduan/gambar/<?php echo $data['foto'] ?>"></td>
                <td class="garis"><?php echo $data['tgl_tanggapan'] ?></td>
                <td class="garis"><?php echo $data['status'] ?></td>
                <td class="garis"><?php echo $data['tanggapan'] ?></td>
              </tr>
              <?php
              $no++;
              }}
             ?>
        </table>
    </td>
  </tr>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <tr bgcolor="#FFFFFF">
    <td colspan="3" align="center" bgcolor="#9CC4E0"><span class="FOOT"><strong>desa timbularjo</strong><br />
jl.margorejo cangkringmalang mriyan timbulharjo</span></td>
  </tr>
</table>
</body>
</html>
