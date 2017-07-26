<?php
require'connect.inc.php';
if (isset($_POST['submit'])) {

  $appno = mysql_real_escape_string($_POST['appno']);
  $name = mysql_real_escape_string($_POST['name']);
  $ccgpa = mysql_real_escape_string($_POST['ccgpa']);
  $cocgpa = mysql_real_escape_string($_POST['cocgpa']);
  $nss = $_POST['ncc'];
  $hs= $_POST['hs'];
  $uty = $_POST['uty'];
  $caste = $_POST['caste'];

  //Calculation

  $tot = 2 * 64 * $ccgpa + 16 * $cocgpa;
  $div = 144;
  $ii = $tot / $div;
  $gs = 0;
  if ($uty == 1) {
    $gs = $ii * 0.1;
  }

  if ($nss == 0) {
    $nss2 = 0;
  } elseif ($nss == 1) {
    $nss2 = 0.1;
  } elseif ($nss == 2) {
    $nss2 = 0.15;
  } elseif ($nss == 3) {
    $nss2 = 0.2;
  }

  if ($hs == 1) {
    $hs2 = 0;
  } elseif ($hs == 2) {
    $hs2 = 0.1;
  } elseif ($hs == 3) {
    $hs2 = 0.2;
  } else {
    $hs2 = 0.25;
  }

  $fs = $ii + $gs + $nss2 - $hs2;

  $query = "INSERT INTO data (appno,name,ccredit,ccgpa,cocredit,cocgpa,nss,hs,uty,fs,caste) VALUES (".$appno.",'".$name."',62,".$ccgpa.",16,".$cocgpa.",".$nss.",".$hs.",".$uty.",".$fs.",".$caste.")";

  $result = mysql_query($query) or die(mysql_error());
  if ($result) {
    header('Location:index.php');
  }
}
?>
