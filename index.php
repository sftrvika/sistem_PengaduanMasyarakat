<html>
<head>
  <?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<title>Sistem Pengaduan Masyarakat Kecamatan Timbulharjo</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="">
<meta name="description" content="Website Pengaduan Masyarakat Adalah Website Yang Diggunakan Untuk Melaporan Masyarakat Jika Melanggar Aturan Setempat">
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
  <table>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>  
    <td>&nbsp;</td>
    <td class="jarak" width="100%" valign="top" bgcolor="#FFFFFF" class="BorderUtama">
      <h2>Haai Selamat Datang Admin :)</h2>
     
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
