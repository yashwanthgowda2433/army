<style>
	.form-input{
		background:#fff;
	}
	.form-control{
		height:max-content;
	}
	#icon{
		display:none!important;
	}
</style>
<script type="text/javascript">
$(document).ready(function() {
  $("#success-alert").hide();
  $("#failed-alert").hide();


	<?php if($this->session->flashdata('success')){?>
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#success-alert").slideUp(500);
        });
	<?php }?>
	<?php if($this->session->flashdata('failed')){?>
        $("#failed-alert").fadeTo(2000, 500).slideUp(500, function() {
            $("#failed-alert").slideUp(500);
        });
	<?php }?>
});
</script>
<div class="container">
    
	<div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-5">
		    <div class="alert alert-success" id="success-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Successfully Submitted. </strong>
            </div>
			<div class="alert alert-danger" id="failed-alert">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>Failed to Submit. Please try again! </strong>
            </div>
			<h2 style='font-family: "Tw Cen MT";color:#000;'>Student Details</h2>
		</div>
	</div>
	
    <div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Cadet No :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetno" style="width:100%;" value="<?php echo $id;?>" disabled/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Cadet Name :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="name" style="width:100%;" value="<?php echo $cadet->cadet_name;?>" disabled/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">House Name :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="house" style="width:100%;" value="<?php echo $cadet->house_name;?>" disabled/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">DOB :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="dob" style="width:100%;" value="<?php echo $cadet->dob;?>" disabled/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of ADMN/Class :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="admn" style="width:100%;" value="<?php echo $cadet->year_of_admn.' / '.$cadet->class_joined;?>" disabled/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of Discharge/Class :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="discharge" style="width:100%;" value="<?php echo $cadet->year_of_discharged.' / '.$cadet->class_left;?>" disabled/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Current Details : </label>
				        <button class="btn btn-dark" id="currentdetails" style="width:150px;">Enter</button>

			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Armed Forces Officers Corner : </label>
				        <button class="btn btn-dark" id="armedforces" style="width:150px;">Enter</button>

			        </div>
		        </div>
	        </div>
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		    <div class="col-sm-12 mt-2" style="text-align:center;">
			        <div class="form-control" style="width:200px;height:200px;border:1px solid #000;margin: auto;">
					<?php 
					if(!empty($cadet->photo)){
				        
						echo '<img src="'.base_url('photo/'.$cadet->photo).'" style="width:100%;"/>';
					}else{
						echo '<h6 style="text-alaign:center">Photo not uploaded.</h6>';
					}
					?>

			        </div>
		    </div>
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    <div class="col-sm-12 mt-2" style="text-align:center;">
			        <div class="form-control">
						<button onclick='window.location.href="<?php echo base_url("student/cadet_view/".$id."?cadetno=".$id);?>"'>
						<?php if(!empty($cadet->pdf)){?>
							<object data="<?php echo base_url('pdf/'.$cadet->pdf);?>#toolbar=0" type="application/pdf" width="260px" height="320px">
							   <embed src="<?php echo base_url('pdf/'.$cadet->pdf);?>#toolbar=0" type="application/pdf" width="260px" height="320px" />
						    </object>
						<?php }else{?>
			                <div class="form-control" style="width:200px;height:200px;border:1px solid #000;margin: auto;">
							    <h6 style="text-alaign:center">PDF Document not Found.</h6>
						    </div>
						<?php } ?>
					    
						<!-- <object width="260px" height="320px" data="https://docs.google.com/gview?embedded=true&url=http://jimbosjoint.com/assets/img/jimbosmenu.pdf"></object> -->
						</button>
			        </div>
		    </div>
	    </div>
    </div>
	
    
	<div class="row mb-5">
		<div class="col-sm-7">
		    
		</div>
		<div class="col-sm-5">
		    <div class="row" style="width:100%;display:flex;flex-wrap: unset;margin-left: 0px;">
			    <button class="btn btn-dark m-2" id="query" style="width:32%;">Query</button>
				<!-- <button class="btn btn-dark m-2" id="home" style="width:32%;">Home</button> -->
				<button class="btn btn-dark m-2" id="exit" style="width:32%;">Logout</button>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
        $("#currentdetails").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/currentdetails/');?>"+input;
		});
		$("#armedforces").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/armedforces/');?>"+input;
		});
		$("#query").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/query/');?>"+input;
		});
		$("#home").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/index/');?>"+input;
		});
		$("#exit").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('login/');?>";
		});
	});
</script>

