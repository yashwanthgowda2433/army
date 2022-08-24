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

<form enctype="multipart/form-data" method="post" action="<?php echo base_url('student/edit_studentdetails/'.$id);?>">  

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
					    <input typt="text" class="form-input" name="cadetno" style="width:100%;" value="<?php echo $cadet->cadet_no;?>" />
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
					    <input typt="text" class="form-input" name="name" style="width:100%;" value="<?php echo $cadet->cadet_name;?>" />
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
					    <input typt="text" class="form-input" name="house" style="width:100%;" value="<?php echo $cadet->house_name;?>" />
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
					    <input typt="text" class="form-input" name="dob" style="width:100%;" value="<?php echo $cadet->dob;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of ADMN :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="admn" style="width:100%;" value="<?php echo $cadet->year_of_admn;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Class Joined :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="class_joined" style="width:100%;" value="<?php echo $cadet->class_joined;?>" />
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
					    <input typt="text" class="form-input" name="discharge" style="width:100%;" value="<?php echo $cadet->year_of_discharged;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Class Left :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="class_left" style="width:100%;" value="<?php echo $cadet->class_left;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Current Details : </label>
				        <a href="<?php echo base_url('student/currentdetails_view/admin?cadetno='.$cadet->cadet_no.'');?>" class="btn btn-dark" id="currentdetails" style="width:150px;">Enter</a>

			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Armed Forces Officers Corner : </label>
				        <a href="<?php echo base_url('student/armedforces_view/admin?cadetno='.$cadet->cadet_no.'');?>" class="btn btn-dark" id="armedforces" style="width:150px;">Enter</a>

			        </div>
		        </div>
	        </div>
			
        </div>
        <div class="col-sm-3" style="padding:0;">
            <div class="col-sm-12 mt-2" style="">
			    <label class="form-label" style="font-size: 17px;">Select Photo of Cadet :</label>

			        <input type="file" class="form-input" name="photo" accept=".jpg,.png,.jpeg"/>
		    </div>
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
			    <label class="form-label" style="font-size: 17px;">Select PDF Document of Cadet :</label>

                <input type="file" class="form-input" name="pdf" accept=".pdf"/>
		    </div>
		    <div class="col-sm-12 mt-2" style="text-align:center;">
			        <div class="form-control">
						<div onclick='window.location.href="<?php echo base_url("student/cadet_view/admin?cadetno=".$id);?>"'>
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
						</div>
			        </div>
		    </div>
	    </div>
    </div>
	
</form> 
	<div class="row mb-5">
		<div class="col-sm-7">
		    
		</div>
		<div class="col-sm-5">
		    <div class="row" style="width:100%;display:flex;flex-wrap: unset;margin-left: 0px;">
				<button class="btn btn-dark m-2" id="home" style="width:32%;" type="submit">Submit</button>

				<a class="btn btn-dark m-2" id="home" style="width:32%;" onclick="history.back()">Back</a>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
        $("#currentdetails").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/currentdetails_view/');?>"+<?php echo $id;?>+'?cadetno='+<?php echo $cadet->cadet_no;?>;
		});
		$("#armedforces").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/armedforces/');?>"+<?php echo $id;?>+'?cadetno='+<?php echo $cadet->cadet_no;?>;
		});
		$("#query").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('student/query/');?>"+<?php echo $id;?>+'?cadetno='+<?php echo $cadet->cadet_no;?>;
		});
		// $("#home").click(function(){
		// 	var input = "<?php echo $id;?>";
		// 	onclick="history.back()"
		// });
		$("#exit").click(function(){
			var input = "<?php echo $id;?>";
			window.location.href="<?php echo base_url('login/');?>";
		});
	});
</script>

