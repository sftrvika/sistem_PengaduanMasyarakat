<?php
// Deklarasi
$myHost	= "localhost";
$myUser	= "root";
$myPasw	= "";
$myDbs	= "pengaduan";

// Buka koneksi MySQL Server
$koneksiDbs	= mysql_connect($myHost, $myUser, $myPasw);
if (! $koneksiDbs) {
  echo "Gagal koneksi boss..!"; mysql_error();
}

// Aktifkan database psbdb pada server MySQL
mysql_select_db($myDbs) or die ("Database $myDbs nggak ada tuh".mysql_error());
?>