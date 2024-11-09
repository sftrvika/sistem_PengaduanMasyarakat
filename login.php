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
    <td width="100%" valign="top" bgcolor="#FFFFFF" class="BorderUtama">
      <?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("librari/koneksi.php");
?>

<title>Form Login</title>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>Masuk Admin</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  <tr><td colspan="2" align="center">Login Sebagai | <a href="user/masyarakat/login.php"><b>user</b></a> | <a href="user/petugas/login.php"><b>petugas</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
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
