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
<!-- <form method="post" action="<?php echo base_url('student/submit_edit_query/'.$id);?>"> -->
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
			<h2 style='font-family: "Tw Cen MT";color:#000;'>View Query Request</h2>
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
					    <textarea class="form-input" name="query" style="width:100%;background:#fff;" rows="5" disabled><?php echo $query->query;?></textarea>
			        </div>
		        </div>
	        </div>

            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Cadet Name :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="name" style="width:100%;" disabled value="<?php echo $cadet->cadet_name;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">House Name :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="house" style="width:100%;" disabled value="<?php echo $cadet->house_name;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">DOB :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="dob" style="width:100%;" disabled value="<?php echo $cadet->dob;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of ADMN :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="admn" style="width:100%;" disabled value="<?php echo $cadet->year_of_admn;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Class Joined :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="class_joined" style="width:100%;" disabled value="<?php echo $cadet->class_joined;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of Discharge/Class :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="discharge" style="width:100%;" disabled value="<?php echo $cadet->year_of_discharged;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Class Left :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="class_left" style="width:100%;" disabled value="<?php echo $cadet->class_left;?>" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Current Details : </label>
				        <a href="<?php echo base_url('student/currentdetails_view/admin?cadetno='.$query->cadet_no.'');?>" class="btn btn-dark" id="currentdetails" style="width:150px;">Enter</a>

			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Armed Forces Officers Corner : </label>
				        <a href="<?php echo base_url('student/armedforces_view/admin?cadetno='.$query->cadet_no.'');?>" class="btn btn-dark" id="armedforces" style="width:150px;">Enter</a>

			        </div>
		        </div>
	        </div>

            <div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Remarks : </label>
				        <textarea class="form-input" name="remarks" style="width:100%;" rows="5"><?php echo $query->remarks;?></textarea>

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
		<input type="hidden" name="id" value="<?php echo $query->id;?>"/>
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">

			    <input type="button" class="btn btn-dark m-2" name="approve" style="width:120px;" value="<?php if($query->status==1){ echo 'Approved';}else{ echo 'Approve'; } ?>"/>
			    <input type="button" class="btn btn-danger m-2" name="reject" style="width:120px;" value="<?php if($query->status==2){ echo 'Rejected';}else{ echo 'Reject'; } ?>"/>

				<a class="btn btn-dark m-2" href="<?php echo base_url('student/query_view/'.$id);?>" id="home" style="width:120px;">Back</a>
				<!-- <a class="btn btn-dark m-2" href="<?php echo base_url('student/view_querires/'.$query->cadet_no);?>" id="exit" style="width:220px;">View Queries</a> -->
			</div>
		</div>
	</div>
<!-- </form> -->
</div>

<script>

    $('input[name=approve]').click(function()
		{
            
					var id = $('input[name=id]').val();
					var remarks = $('textarea[name=remarks]').val();
					var status = 1;


			        $.post('<?php echo base_url('student/query_status');?>',
			        {id:id,remarks:remarks,status:status},function(result){
                        $('input[name=approve]').val('Approved');

			        });
			
		});

        $('input[name=reject]').click(function()
		{
            
					var id = $('input[name=id]').val();
					var remarks = $('textarea[name=remarks]').val();
					var status = 2;


			        $.post('<?php echo base_url('student/query_status');?>',
			        {id:id,remarks:remarks,status:status},function(result){
                        $('input[name=reject]').val('Rejected');

			        });
			
		});
    </script>
