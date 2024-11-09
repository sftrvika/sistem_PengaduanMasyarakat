<html>
<head>
<title>Sistem Pengaduan Masyarakat Desa Timbulharjo</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="pengaduan masyarakat ">
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
          <a href="masyarakat.php" target="_self" class="katlink">Data Petugas</a> |
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
          <td width="92%"><a href="masyarakat.php" target="_self" class="katlink">Masyarakat</a></td>
        </tr> 
        <tr>
          <td width="8%"><img src="../../gambar/shutdown.png" width="15" height="15"></td>
          <td width="92%"><a class="katlink" href="../pengaduan/pengaduan.php">Pengaduan</a></td>
        </tr>
        <tr>
          <td><img src="../../gambar/shutdown.png" width="15" height="15"></td>
          <td><a href="../petugas/petugas.php" target="_self" class="katlink">Petugas</a></td>
          </tr>
        <tr>
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
      <h2>Tambah Data</h2>
      <p><a href="masyarakat.php" class="katlink">Home</a></p>
      <form action="tambah_proses.php" method="post">
      <input type="hidden" name="nik" value="<?php echo $nik;  ?>">

        <table width="100%" class="BorderUtama" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="registrasi">
              <fieldset class="baris2">
                        <legend>Data Masyarakat
                        </legend>
                        <p>
                            <label>Nik</label>
                            <input type="text" maxlength="16" name="nik" required>
                        </p>
                        <p>
                            <label>Nama</label>
                            <input type="text" maxlength="16" name="nama" required>
                        </p>
                        <p>
                            <label>Username</label>
                            <input type="text" name="username" size="50" maxlength="50" required/>
                        </p>
                        <p>
                            <label>Password</label>
                            <input type="password" name="password" size="50" maxlength="50" required/>
                        </p>
                        <p>
                            <label>Telepon</label>
                            <input type="text" name="telp"  maxlength="13" required>
                        </p>
                    </fieldset>
            </td>
          </tr>
        </table>
        <input type="submit" name="tambah" value="TAMBAH">

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