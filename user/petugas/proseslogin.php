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
        <td width="597" height="25" valign="middle" ></td>
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
    <td width="100%" height="200" valign="top" bgcolor="#FFFFFF" class="BorderUtama">
      <?php
   session_start();
   require_once("librari/koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = mysql_query("SELECT * FROM petugas WHERE username = '$username'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>
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