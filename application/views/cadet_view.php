<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center mx-auto mt-5">
                <!-- <object data="<?php echo base_url('pdf/'.$cadet->pdf);?>#toolbar=0" type="application/pdf" width="100%" height="1020px"> -->
				<?php if($id == 'admin'){?>
					<object data="<?php echo base_url('pdf/'.$cadet->pdf);?>" type="application/pdf" width="100%" height="1020px">
				<?php }else{?>
					<object data="<?php echo base_url('pdf/'.$cadet->pdf);?>#toolbar=0" type="application/pdf" width="100%" height="1020px">
				<?php }?>
				
					<embed src="<?php echo base_url('pdf/'.$cadet->pdf);?>" type="application/pdf" width="100%" height="1020px" />
				</object>
        </div>
    </div>
	<div class="row mb-5 mt-2">
		
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">
			    <!-- <button class="btn btn-dark m-2" id="submit" style="width:120px;">Submit</button> -->
				<?php if($id == 'admin'){?> 
				<a class="btn btn-dark m-2" onclick="history.back()" id="home" style="width:120px;">Back</a>

					<?php }else{?>
				<a class="btn btn-dark m-2" onclick="history.back()" id="home" style="width:120px;">Back</a>
						 <?php }?>
				<!-- <a class="btn btn-dark m-2" href="<?php echo base_url('login/');?>" id="exit" style="width:120px;">Exit</a> -->
			</div>
		</div>
	</div>
</div>

<?php
clearstatcache();
?>