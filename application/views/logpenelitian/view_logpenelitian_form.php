<script>
  function button_cancel() {
    location.replace('<?php echo base_url();?>index.php/logpenelitian');
  }
</script>
<div class="panel panel-info">
  <div class="panel-heading"> Kelola Data Log Penelitian</div>
  <div class="panel-body">
    <?=form_open('logpenelitian/logpenelitian_manage','class="form-horizontal"')?>
      <?php if($action=="insert"){?>
        <div class="form-group">
          <label class="col-sm-1 control-label">Log</label>
          <div class="col-sm-9">
            <textarea name="log" class="form-control"></textarea>
          </div>
          <div class="col-sm-2">
            <?=form_hidden('action',$action)?>
              <button type="submit" class="btn btn-primary">Tambah</button>
              <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
          </div>
        </div>
      <?php }if($action=="update"){?>
          <div class="form-group">
            <label class="col-sm-1 control-label">log</label>
            <div class="col-sm-9">
              <textarea name="log" class="form-control">
                <?php echo $row['log']?>
              </textarea>
            </div>
            <div class="col-sm-2">
              <?=form_hidden('action',$action)?>
                <?=form_hidden('idlogpenelitian',$row['idlogpenelitian'])?>
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
            </div>
          </div>
      <?php }if($action=="delete"){?>
            <div class="form-group">
              <label class="col-sm-1 control-label">Waktu</label>
              <div class="col-sm-1">
                <?php echo $row['waktu']?>
              </div>
              <label class="col-sm-1 control-label">Log</label>
              <div class="col-sm-7">
                <?php echo $row['log']?>
              </div>
              <div class="col-sm-2">
                <?=form_hidden('action',$action)?>
                  <?=form_hidden('idlogpenelitian',$row['idlogpenelitian'])?>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                    <button type="button" class="btn btn-primary" onclick="button_cancel()">Batal</button>
              </div>
            </div>
      <?php }?>
    </form>
  </div>
</div>
<?php $this->load->view('logpenelitian/view_logpenelitian'); ?>
