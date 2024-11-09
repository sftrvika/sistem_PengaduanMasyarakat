<html>
<head>
<title>Sistem Pengaduan Masyarakat Desa Timbulharjo</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="pengaduan masyarakat">
<meta name="description" content="Website Pengaduan Masyarakat Adalah Website Yang Diggunakan Untuk Melaporan Masyarakat Jika Melanggar Aturan Setempat">
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
        <?php 
          include("../../librari/koneksi.php");
          $id = $_GET['id'];
          $show = mysql_query("SELECT * FROM pengaduan WHERE id_pengaduan = '$id'");
            if(mysql_num_rows($show) == 0){
              echo "<script>window.history.back()</script>";
            }
          else{
            $data = mysql_fetch_assoc($show);
          } 
        ?>

        <form action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;  ?>">
        <h2>Edit Data Pengaduan</h2>
        <p><a href="pengaduan.php" class="katlink">Home</a></p>

        <table width="100%" class="BorderUtama" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="registrasi">
              <fieldset class="baris2">
                        <legend>Data Pengaduan</legend>
                        <p>
                            <label>ID</label>
                            <input type="text" value="<?php echo $data['id_pengaduan'];  ?>"  maxlength="16" name="id_pengaduan" required/>
                        </p>
                        <p>
                            <label>TANGGAL</label>
                            <input type="text" value="<?php echo $data['tgl_pengaduan'];  ?>"  name="tgl_pengaduan" size="50" maxlength="50" required/>
                        </p>
                        <p>
                            <label>NIK</label>
                            <input type="text" value="<?php echo $data['nik'];  ?>"  name="nik" size="50" maxlength="50" required/>
                        </p>
                        <p>
                            <label>ISI LAPORAN</label>
                            <textarea name="isi_laporan"><?php echo $data['isi_laporan'];  ?></textarea>
                        </p>
                        <p>
                            <label>FOTO</label>
                            <input type="file" value="<img src="gambar/<?php echo $data['foto'] ?>">" name="foto" required/>

                        </p>
                        <p>
                            <label>STATUS</label>
                            <select name="status" required>
                                <option value="">- PILIH LEVEL -</option>
                                <option value="o" <?php if($data['status'] == 'o'){
                            echo 'selected';
                        } ?>>o</option>
                                <option value="proses" <?php if($data['status'] == 'proses'){
                            echo 'selected';
                        } ?>>proses</option>
                                <option value="selesai" <?php if($data['status'] == 'selesai'){
                            echo 'selected';
                        } ?>>selesai</option>
                            </select>
                        </p>
                    </fieldset>
                </td>
              </tr>
        </table>
        <input type="submit" name="simpan" value="Simpan">
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
