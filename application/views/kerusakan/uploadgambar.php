<th colspan="1">Photo Kerusakan</th>
            <td colspan="2">
              <a href="#" data-toggle="modal" data-target="#modalPhoto<?=$i?>">
                <img width="80" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
              </a>
              <!-- Modal -->
              <div class="modal fade" id="modalPhoto<?=$i?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <img width="560" src="<?php echo base_url();?>/upload/photos/<?php echo $row['photokerusakan']?>">
                    </div>
<!--
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    </div>
-->
                  </div>
                </div>
              </div>
            </td>