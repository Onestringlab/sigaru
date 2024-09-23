
<script>
	function button_cancel(){
		location.replace('<?php echo base_url();?>index.php/konken');
	}
</script>
<div class="panel panel-primary">
	<div class="panel-heading"> Data Konken</div>
	<div class="panel-body">
		<?=form_open('konken/konken_manage','class="form-horizontal"')?>
		<?php if($action=="insert"){?>
			<div class="form-group">
				<label class="col-sm-2 control-label">idstatuskend</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="idstatuskend" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">idkendaraan</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="idkendaraan" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">supir</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="supir" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">tglterima</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="tglterima" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">kondisi</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="kondisi" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang1</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang1" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang2</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang2" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang3</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang3" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang4</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang4" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang5</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang5" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang6</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang6" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang7</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang7" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang8</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang8" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang9</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang9" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang10</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang10" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang11</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang11" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang12</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang12" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang13</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang13" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang14</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang14" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang15</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang15" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang16</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang16" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang17</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang17" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang18</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang18" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang19</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang19" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang20</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang20" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang21</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang21" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang22</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang22" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang23</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang23" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang24</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang24" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang25</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang25" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang26</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang26" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang27</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang27" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang28</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang28" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang29</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang29" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang30</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang30" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang31</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang31" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang32</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang32" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang33</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang33" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang34</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang34" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang35</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang35" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang36</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang36" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang37</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang37" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang38</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang38" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang39</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang39" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang40</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang40" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang41</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang41" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang42</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang42" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang43</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang43" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang44</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang44" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang45</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang45" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang46</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang46" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang47</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang47" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang48</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang48" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang49</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang49" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang50</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang50" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang51</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang51" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang52</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang52" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang53</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang53" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang54</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang54" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang55</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang55" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang56</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang56" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang57</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang57" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang58</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang58" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang59</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang59" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang60</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang60" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang61</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang61" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang62</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang62" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang63</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang63" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang64</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang64" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">insertedby</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="insertedby" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">inserteddate</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="inserteddate" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">updatedby</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="updatedby" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">updateddate</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="updateddate" value="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<button type="submit" class="btn btn-primary">Insert</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="update"){?>
			<div class="form-group">
				<label class="col-sm-2 control-label">idstatuskend</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="idstatuskend" value="<?php echo $row['idstatuskend']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">idkendaraan</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="idkendaraan" value="<?php echo $row['idkendaraan']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">supir</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="supir" value="<?php echo $row['supir']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">tglterima</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="tglterima" value="<?php echo $row['tglterima']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">kondisi</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="kondisi" value="<?php echo $row['kondisi']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang1</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang1" value="<?php echo $row['barang1']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang2</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang2" value="<?php echo $row['barang2']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang3</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang3" value="<?php echo $row['barang3']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang4</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang4" value="<?php echo $row['barang4']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang5</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang5" value="<?php echo $row['barang5']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang6</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang6" value="<?php echo $row['barang6']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang7</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang7" value="<?php echo $row['barang7']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang8</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang8" value="<?php echo $row['barang8']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang9</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang9" value="<?php echo $row['barang9']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang10</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang10" value="<?php echo $row['barang10']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang11</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang11" value="<?php echo $row['barang11']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang12</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang12" value="<?php echo $row['barang12']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang13</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang13" value="<?php echo $row['barang13']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang14</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang14" value="<?php echo $row['barang14']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang15</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang15" value="<?php echo $row['barang15']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang16</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang16" value="<?php echo $row['barang16']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang17</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang17" value="<?php echo $row['barang17']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang18</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang18" value="<?php echo $row['barang18']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang19</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang19" value="<?php echo $row['barang19']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang20</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang20" value="<?php echo $row['barang20']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang21</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang21" value="<?php echo $row['barang21']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang22</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang22" value="<?php echo $row['barang22']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang23</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang23" value="<?php echo $row['barang23']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang24</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang24" value="<?php echo $row['barang24']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang25</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang25" value="<?php echo $row['barang25']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang26</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang26" value="<?php echo $row['barang26']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang27</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang27" value="<?php echo $row['barang27']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang28</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang28" value="<?php echo $row['barang28']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang29</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang29" value="<?php echo $row['barang29']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang30</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang30" value="<?php echo $row['barang30']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang31</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang31" value="<?php echo $row['barang31']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang32</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang32" value="<?php echo $row['barang32']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang33</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang33" value="<?php echo $row['barang33']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang34</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang34" value="<?php echo $row['barang34']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang35</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang35" value="<?php echo $row['barang35']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang36</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang36" value="<?php echo $row['barang36']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang37</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang37" value="<?php echo $row['barang37']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang38</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang38" value="<?php echo $row['barang38']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang39</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang39" value="<?php echo $row['barang39']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang40</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang40" value="<?php echo $row['barang40']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang41</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang41" value="<?php echo $row['barang41']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang42</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang42" value="<?php echo $row['barang42']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang43</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang43" value="<?php echo $row['barang43']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang44</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang44" value="<?php echo $row['barang44']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang45</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang45" value="<?php echo $row['barang45']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang46</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang46" value="<?php echo $row['barang46']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang47</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang47" value="<?php echo $row['barang47']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang48</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang48" value="<?php echo $row['barang48']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang49</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang49" value="<?php echo $row['barang49']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang50</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang50" value="<?php echo $row['barang50']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang51</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang51" value="<?php echo $row['barang51']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang52</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang52" value="<?php echo $row['barang52']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang53</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang53" value="<?php echo $row['barang53']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang54</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang54" value="<?php echo $row['barang54']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang55</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang55" value="<?php echo $row['barang55']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang56</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang56" value="<?php echo $row['barang56']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang57</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang57" value="<?php echo $row['barang57']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang58</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang58" value="<?php echo $row['barang58']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang59</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang59" value="<?php echo $row['barang59']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang60</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang60" value="<?php echo $row['barang60']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang61</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang61" value="<?php echo $row['barang61']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang62</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang62" value="<?php echo $row['barang62']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang63</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang63" value="<?php echo $row['barang63']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang64</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="barang64" value="<?php echo $row['barang64']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">insertedby</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="insertedby" value="<?php echo $row['insertedby']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">inserteddate</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="inserteddate" value="<?php echo $row['inserteddate']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">updatedby</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="updatedby" value="<?php echo $row['updatedby']?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">updateddate</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="updateddate" value="<?php echo $row['updateddate']?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idstatuskend',$row['idstatuskend'])?>
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }if($action=="delete"){?>
			<div class="form-group">
				<label class="col-sm-2 control-label">idstatuskend</label>
				<div class="col-sm-10">
					<?php echo $row['idstatuskend']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">idkendaraan</label>
				<div class="col-sm-10">
					<?php echo $row['idkendaraan']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">supir</label>
				<div class="col-sm-10">
					<?php echo $row['supir']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">tglterima</label>
				<div class="col-sm-10">
					<?php echo $row['tglterima']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">kondisi</label>
				<div class="col-sm-10">
					<?php echo $row['kondisi']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang1</label>
				<div class="col-sm-10">
					<?php echo $row['barang1']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang2</label>
				<div class="col-sm-10">
					<?php echo $row['barang2']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang3</label>
				<div class="col-sm-10">
					<?php echo $row['barang3']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang4</label>
				<div class="col-sm-10">
					<?php echo $row['barang4']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang5</label>
				<div class="col-sm-10">
					<?php echo $row['barang5']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang6</label>
				<div class="col-sm-10">
					<?php echo $row['barang6']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang7</label>
				<div class="col-sm-10">
					<?php echo $row['barang7']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang8</label>
				<div class="col-sm-10">
					<?php echo $row['barang8']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang9</label>
				<div class="col-sm-10">
					<?php echo $row['barang9']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang10</label>
				<div class="col-sm-10">
					<?php echo $row['barang10']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang11</label>
				<div class="col-sm-10">
					<?php echo $row['barang11']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang12</label>
				<div class="col-sm-10">
					<?php echo $row['barang12']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang13</label>
				<div class="col-sm-10">
					<?php echo $row['barang13']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang14</label>
				<div class="col-sm-10">
					<?php echo $row['barang14']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang15</label>
				<div class="col-sm-10">
					<?php echo $row['barang15']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang16</label>
				<div class="col-sm-10">
					<?php echo $row['barang16']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang17</label>
				<div class="col-sm-10">
					<?php echo $row['barang17']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang18</label>
				<div class="col-sm-10">
					<?php echo $row['barang18']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang19</label>
				<div class="col-sm-10">
					<?php echo $row['barang19']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang20</label>
				<div class="col-sm-10">
					<?php echo $row['barang20']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang21</label>
				<div class="col-sm-10">
					<?php echo $row['barang21']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang22</label>
				<div class="col-sm-10">
					<?php echo $row['barang22']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang23</label>
				<div class="col-sm-10">
					<?php echo $row['barang23']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang24</label>
				<div class="col-sm-10">
					<?php echo $row['barang24']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang25</label>
				<div class="col-sm-10">
					<?php echo $row['barang25']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang26</label>
				<div class="col-sm-10">
					<?php echo $row['barang26']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang27</label>
				<div class="col-sm-10">
					<?php echo $row['barang27']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang28</label>
				<div class="col-sm-10">
					<?php echo $row['barang28']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang29</label>
				<div class="col-sm-10">
					<?php echo $row['barang29']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang30</label>
				<div class="col-sm-10">
					<?php echo $row['barang30']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang31</label>
				<div class="col-sm-10">
					<?php echo $row['barang31']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang32</label>
				<div class="col-sm-10">
					<?php echo $row['barang32']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang33</label>
				<div class="col-sm-10">
					<?php echo $row['barang33']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang34</label>
				<div class="col-sm-10">
					<?php echo $row['barang34']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang35</label>
				<div class="col-sm-10">
					<?php echo $row['barang35']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang36</label>
				<div class="col-sm-10">
					<?php echo $row['barang36']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang37</label>
				<div class="col-sm-10">
					<?php echo $row['barang37']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang38</label>
				<div class="col-sm-10">
					<?php echo $row['barang38']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang39</label>
				<div class="col-sm-10">
					<?php echo $row['barang39']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang40</label>
				<div class="col-sm-10">
					<?php echo $row['barang40']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang41</label>
				<div class="col-sm-10">
					<?php echo $row['barang41']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang42</label>
				<div class="col-sm-10">
					<?php echo $row['barang42']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang43</label>
				<div class="col-sm-10">
					<?php echo $row['barang43']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang44</label>
				<div class="col-sm-10">
					<?php echo $row['barang44']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang45</label>
				<div class="col-sm-10">
					<?php echo $row['barang45']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang46</label>
				<div class="col-sm-10">
					<?php echo $row['barang46']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang47</label>
				<div class="col-sm-10">
					<?php echo $row['barang47']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang48</label>
				<div class="col-sm-10">
					<?php echo $row['barang48']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang49</label>
				<div class="col-sm-10">
					<?php echo $row['barang49']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang50</label>
				<div class="col-sm-10">
					<?php echo $row['barang50']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang51</label>
				<div class="col-sm-10">
					<?php echo $row['barang51']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang52</label>
				<div class="col-sm-10">
					<?php echo $row['barang52']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang53</label>
				<div class="col-sm-10">
					<?php echo $row['barang53']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang54</label>
				<div class="col-sm-10">
					<?php echo $row['barang54']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang55</label>
				<div class="col-sm-10">
					<?php echo $row['barang55']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang56</label>
				<div class="col-sm-10">
					<?php echo $row['barang56']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang57</label>
				<div class="col-sm-10">
					<?php echo $row['barang57']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang58</label>
				<div class="col-sm-10">
					<?php echo $row['barang58']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang59</label>
				<div class="col-sm-10">
					<?php echo $row['barang59']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang60</label>
				<div class="col-sm-10">
					<?php echo $row['barang60']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang61</label>
				<div class="col-sm-10">
					<?php echo $row['barang61']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang62</label>
				<div class="col-sm-10">
					<?php echo $row['barang62']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang63</label>
				<div class="col-sm-10">
					<?php echo $row['barang63']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">barang64</label>
				<div class="col-sm-10">
					<?php echo $row['barang64']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">insertedby</label>
				<div class="col-sm-10">
					<?php echo $row['insertedby']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">inserteddate</label>
				<div class="col-sm-10">
					<?php echo $row['inserteddate']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">updatedby</label>
				<div class="col-sm-10">
					<?php echo $row['updatedby']?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">updateddate</label>
				<div class="col-sm-10">
					<?php echo $row['updateddate']?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?=form_hidden('action',$action)?>
					<?=form_hidden('idstatuskend',$row['idstatuskend'])?>
					<button type="submit" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-primary" onclick="button_cancel()">Cancel</button>
				</div>
			</div>
		<?php }?>
	</form>
</div>
</div>

