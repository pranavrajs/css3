<?php
require'connect.inc.php';
include'header.php';
?>

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header well" data-original-title>
      <h2><i class="icon-user"></i>Student Details</h2>
      <div class="box-icon">
        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>

          <tr>
            <th>Sl no</th>
            <th>Application no</th>
            <th>Name</th>
            <th>Category</th>
            <th>Core Credit</th>
            <th>Core CGPA</th>
            <th>Core CGP</th>

            <th>Comple Credit</th>
            <th>Comple CGPA</th>
            <th>Comple CGP</th>
            <th>Initial Index</th>
            <th>Grace Score</th>
            <th>NSS / NCC</th>
            <th>HS</th>
            <th>FInal Score</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM data ORDER BY fs DESC";
          $result=mysql_query($query) or die(mysql_error());
          if($result) {
            $num=mysql_num_rows($result);
            if($num)
            {
              $i =1;
              while($res=mysql_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $res['appno'];?></td>
                  <td><?php echo $res['name'];?></td>
                  <td>
                    <?php
                    if($res['caste']==1)
                      echo "General";
                    elseif($res['caste']==2)
                      echo "OBC";
                    elseif($res['caste']==3)
                      echo "OEC";
                    elseif($res['caste']==4)
                      echo "SC";
                    elseif($res['caste']==5)
                      echo "ST";
                    else
                      echo "No data";
                    ?>
                  </td>
                  <td><?php echo $res['ccredit'];?></td>
                  <td><?php echo $res['ccgpa'];?></td>
                  <td>
                    <?php $ccgp = $res['ccgpa'] * $res['ccredit'];
                      echo round($ccgp , 2);
                    ?>
                  </td>
                  <td><?php echo $res['cocredit'];?></td>
                  <td><?php echo $res['cocgpa'];?></td>
                  <td>
                    <?php $cocgp = $res['cocgpa'] * $res['cocredit'];
                      echo round($cocgp , 2);
                    ?>
                  </td>
                  <td>
                    <?php
                      $tot = 2 * 64 * $res['ccgpa'] + 16 * $res['cocgpa'];
                      $div = 144;
                      $ii = $tot / $div;
                      echo round($ii , 2);
                    ?>
                  </td>
                  <td>
                    <?php
                      $gs = 0;
                      if($res['uty'] == 1)
                        $gs = $ii * 0.1;
                      echo round($gs, 2);
                    ?>
                  </td>
                  <td>
                    <?php
                      if($res['nss']==0)
                        $nss = 0;
                      elseif($res['nss']==1)
                        $nss = 0.1;
                      elseif($res['nss']==2)
                        $nss = 0.15;
                      elseif($res['nss']==3)
                        $nss = 0.2;
                      echo $nss;
                    ?>
                  </td>
                  <td>
                    <?php
                    if($res['hs']==1)
                      $hs = 0;
                    elseif($res['hs']==2)
                      $hs = 0.1;
                    elseif($res['hs']==3)
                      $hs= 0.2;
                    else
                      $hs = 0.25;
                    echo $hs;
                    ?>
                  </td>
                  <td><?php $fs = $ii + $gs + $nss - $hs; echo round($fs, 2);?></td>
                </tr>
            <?php
              $i++;
          }
        }
      }
      ?>
    </tbody>
  </table>
</div>
</div>
</div>
<?php
include'footer.php';
?>
