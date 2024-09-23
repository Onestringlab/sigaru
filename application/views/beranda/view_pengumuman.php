<marquee><strong>
  <?php
    $i=1;
    foreach($pengumuman_list as $row): 
      echo  '['.formatTanggal($row['tanggal']). '&nbsp;-&nbsp;';
      echo $row['pengumuman'] . ']&nbsp;' ;
    endforeach 
  ?>
</strong></marquee>
