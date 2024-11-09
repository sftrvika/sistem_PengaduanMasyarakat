<html>
<head>
<title> Sistem Pengaduan Masyarakat Desa Timbulharjo</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="pendaftaran siswa baru, penerimaan siswa baru, sistem psb, psb sma, psb smu, psb online">
<meta name="description" content="Website Sistem Penerimaan Siswa Baru (PSB) Online SMA Teladan Way Jepara, Lampung Timur. Anda bagi lulusan SMP dimanapun berhak menjadi calon siswa baru di SMA Teladan Way Jepara">
<body topmargin="3">
<table width="798" class="border" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFFFFF">
    <td colspan="3" bgcolor="#009900"><img src="../../gambar/header1.jpg" height="100"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td colspan="3"><table width="798" class="border" bordercolor="#009999" align="center" cellpadding="0" cellspacing="0">
      <tr class="ListBack">
        <td width="597" height="25" valign="middle" ><img src="../../gambar/ikon.png" width="9" height="9"> 
          <a href="../../index.php" target="_self" class="katlink">Beranda</a> | 
          <a href="../../tentang.php" target="_self" class="katlink">Tentang</a> | 
          <a href="../../kontak.php" target="_self" class="katlink">Kontak</a> |
          <a href="pengaduan.php" target="_self" class="katlink">Data User</a> |
          <a href="../../report.php" target="_self" class="katlink">Report</a> |
          <a href="../../logout.php" target="_self" class="katlink">Logout</a>
        </td>
        <td width="199" align="right">&nbsp;<img src="../../gambar/ikon.png" width="9" height="9"><b>
          <script language=JavaScript> document.write (hari)</script>
        </b> Tanggal <b><?php echo date('d-M-Y');?></b></td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="181">&nbsp;</td>
    <td width="5">&nbsp;</td>
    <td width="610">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td align="center" valign="top">
  <table width="100%" class="BorderUtama" border="0" cellpadding="0" cellspacing="0"> 
    
    <tr align="center" class="ListBack"> 
          <td width="167" height="25" class="HEAD" align="left">
       <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
          <td width="16%" height="26" align="center" bgcolor="#336CA1" ><img src="../../gambar/user_red.png" width="20" height="20"></td>
          <td width="84%" bgcolor="#336CA1" class="HEAD"><strong>MENU UTAMA</strong></td>
        </tr>
      </table>      </td>
        </tr>     
    <tr> 
          <td height="18" align="center" valign="top" bgcolor="#FFFFFF" >
        <table width="98%" border="0" align="center" cellpadding="2" cellspacing="2"  >
        <tr>
          <td width="8%"><img src="../../gambar/shutdown.png" width="15" height="15"></td>
          <td width="92%"><a class="katlink" href="pengaduan.php">Pengaduan</a></td>
        </tr>
          <td><img src="../../gambar/shutdown.png" width="15" height="15"></td>
          <td><a href="../tanggapan/tanggapan.php" target="_self" class="katlink">Tanggapan</a></td>
          </tr>
        </table>
        </tr>   
        <tr align="center" class="ListBack"> 
          <td width="167" height="25" class="HEAD" align="left" valign="middle" >&nbsp;     </td>
        </tr>
      </table></td>
    <td>&nbsp;</td>
    <td width="610" valign="top" bgcolor="#FFFFFF" class="BorderUtama">
      <h2>Data Pengaduan</h2>
      <p><a href="tambah.php" class="katlink">Tambah Data</a></p>

        <table width="100%" class="BorderUtama" border="1" cellpadding="0" cellspacing="0">
          <tr>
            <th>No.</th>
            <th>ID</th>
            <th>TANGGAL PENGADUAN</th>
            <th>NIK</th>
            <th>ISI LAPORAN</th>
            <th>FOTO</th>
            <th>STATUS</th>
            <th>Aksi</th>
          </tr>
            <?php 
              include("../../librari/koneksi.php");
              $query = mysql_query("SELECT * FROM pengaduan ORDER BY id_pengaduan DESC") or die(mysql_error());
              if(mysql_num_rows($query) == 0){ ?>
                <tr><td colspan="8" align="center">Tidak ada data</td></tr>
              <?php }
              else{
                $no =1;
                while($data = mysql_fetch_assoc($query)){
                ?>
              <tr>
                <td class="garis"><?php echo $no ?></td>
                <td class="garis"><?php echo $data['id_pengaduan'] ?></td>
                <td class="garis"><?php echo $data['tgl_pengaduan'] ?></td>
                <td class="garis"><?php echo $data['nik'] ?></td>
                <td class="garis"><?php echo $data['isi_laporan'] ?></td>
                <td class="garis"><img src="gambar/<?php echo $data['foto'] ?>"></td>
                <td class="garis"><?php echo $data['status'] ?></td>
                <td class="garis">
                  <a href="edit.php?id=<?php echo $data['id_pengaduan'] ?>" class="katlink">Edit</a> | 
                  <a href="hapus.php?id=<?php echo $data['id_pengaduan'] ?>" onclick="return confirm('apa anda yakin')" class="katlink">Hapus</a>
                </td>
              </tr>
              <?php
              $no++;
              }}
             ?>
        </table>

    </td>
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