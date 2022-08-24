<style>
	/* .form-input{
		background:#fff;
	} */
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
<form method="post" action="<?php echo base_url('student/submit_edit_query/'.$id);?>">
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
			<h2 style='font-family: "Tw Cen MT";color:#000;'>Edit Query Request</h2>
		</div>
	</div>
    <div class="row">
        <div class="col-sm-6" style="margin:auto;">
            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Cadet No : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetno" value="<?php echo $query->cadet_no;?>" style="width:100%;" disabled/>
			        </div>
		        </div>
	        </div>
					    <input type="hidden" class="form-input" name="cadetno" value="<?php echo $query->cadet_no;?>" style="width:100%;"/>

			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Detailed Query : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" name="query" style="width:100%;" rows="5" ><?php echo $query->query;?></textarea>
			        </div>
		        </div>
	        </div>
			
        </div>
        <!-- <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div> -->
    </div>

    
	
    
	<div class="row mb-5 mt-2">
		
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">
			    <button class="btn btn-dark m-2" id="submit" style="width:120px;">Submit</button>
				<a class="btn btn-dark m-2" href="<?php echo base_url('student/index/'.$query->cadet_no);?>" id="home" style="width:120px;">Back</a>
				<a class="btn btn-dark m-2" href="<?php echo base_url('student/view_querires/'.$query->cadet_no);?>" id="exit" style="width:220px;">View Queries</a>
			</div>
		</div>
	</div>
</form>
</div>

