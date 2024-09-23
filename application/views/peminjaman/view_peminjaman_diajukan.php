<div class="panel panel-info">
  <div class="panel-heading"> Data Peminjaman Kendaraan - Diajukan</div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover results">
        <thead>
          <tr>
            <th width="50px">#</th>
            <th>Kendaraan</th>
            <!--            <th>iduser</th>-->
            <th>Nama Peminjam</th>
            <!--            <th>Unit/Prodi</th>-->
            <th>Tanggal</th>
            <!--            <th>Selesai</th>-->
            <th>Tujuan</th>
<!--            <th>Acara</th>-->
            <!--            <th>waktumulai</th>-->
            <!--            <th>waktuselesai</th>-->
            <!--            <th>keberangkatan</th>-->
            <th width="80px">Status</th>
            <!--            <th>insertedby</th>-->
            <!--            <th>insertedat</th>-->
            <!--            <th>updatedby</th>-->
            <!--            <th>updatedat</th>-->
            <?php
              $role = $this->session-> userdata('role');
              if($role == "Admin")
              {
            ?>
              <th width="60px"></th>
            <?php
              }
            ?>
          </tr>
        </thead>
        <tbody>
          <?php
        $i=1;
        foreach($diajukan_list as $row):

        ?>
            <tr>
              <td>
                <?=$i++ ?>
              </td>
              <td>
                <?php echo $row['nopolisi'] . " - ". $row['merk']?>
              </td>
              <!--
              <td>
                <?=$row['iduser']?>
              </td>
-->
              <td>
                <?=$row['namapeminjam']?>
              </td>
              <!--
              <td>
                <?=$row['institusi']?>
              </td>
-->
              <td>
                <?php echo formatTanggal($row['mulai']) ." - ". formatTanggal($row['selesai'])?>
              </td>
              <td>
                <?=$row['tujuan']?>
              </td>
<!--
              <td>
                <?=$row['acara']?>
              </td>
-->
              <!--
              <td>
                <?=$row['waktumulai']?>
              </td>
              <td>
                <?=$row['waktuselesai']?>
              </td>
              <td>
                <?=$row['keberangkatan']?>
              </td>
-->
              <td>
                <?=$row['status']?>
              </td>
              <!--
              <td>
                <?=$row['insertedby']?>
              </td>
              <td>
                <?=$row['insertedat']?>
              </td>
              <td>
                <?=$row['updatedby']?>
              </td>
              <td>
                <?=$row['updatedat']?>
              </td>
-->
              <?php
                $role = $this->session-> userdata('role');
                if($role == "Admin")
                {
                  echo "<td><center>";
                  echo anchor('peminjaman/peminjaman_form_update/'.$row['idpeminjaman'], '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>').'&nbsp;';
                    echo anchor('peminjaman/peminjaman_form_delete/'.$row['idpeminjaman'], '<span class="fa fa-trash-o" aria-hidden="true"></span>');
                  echo "</center></td>";
                }
              ?>
            </tr>
            <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
