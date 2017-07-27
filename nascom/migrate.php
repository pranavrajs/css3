<?php
require'connect.inc.php';

$query = "SELECT * FROM data ORDER BY id DESC";
$result = mysql_query($query) or die(mysql_error());

if($result) {
  $num = mysql_num_rows($result);
  if ($num) {
    $queryArr = array();
    while( $res = mysql_fetch_array($result) ) {
      $id = $res['id'];
      $appno = $res['appno'];
      $name = $res['name'];
      $ccgpa = $res['ccgpa'];
      $cocgpa = $res['cocgpa'];
      $nss = $res['ncc'];
      $hs= $res['hs'];
      $uty = $res['uty'];
      $caste = $res['caste'];

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
      $fs = round($fs, 2);
      $query = "UPDATE data SET fs = ".$fs." WHERE id = ".$id.";";
      array_push($queryArr, $query);
    }
    for ($i = 0; $i < count($queryArr); $i++) {
      $result = mysql_query($queryArr[$i]) or die(mysql_error());
    }
  }
}

?>
