
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
                <strong>Record Not Found! </strong>
            </div>
            <h2 style='font-family: "Tw Cen MT";color:#000;'>Admin Entry Screen</h2>
		</div>
	</div>
	<!-- <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-2">
			<div class="form-control">
				<label class="form-label">Cadet No :</label>
				<input typt="text" class="form-input" name="cadetno"/>
			</div>
		</div>
	</div> -->

	<div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4">
			<div class="form-control">
				<button class="btn btn-dark" style="width:150px;" onclick="window.location.href='<?php echo base_url('student/add/'.$id);?>'">Add New Record</button>
			</div>
		</div>
	</div>
    <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4">
			<div class="form-control">
				<button class="btn btn-dark" style="width:150px;" onclick="window.location.href='<?php echo base_url('student/search/'.$id);?>'">Cadet Record</button>
			</div>
		</div>
	</div>
    <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4">
			<div class="form-control">
				<button class="btn btn-dark" style="width:150px;" onclick="window.location.href='<?php echo base_url('student/query_view/'.$id);?>'">View Queries</button>
			</div>
		</div>
	</div>
    <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4 mb-5">
			<div class="form-control" style="text-align:end;">
				<button class="btn btn-dark" style="width:150px;" onclick="window.location.href='<?php echo base_url('login/');?>'">Logout</button>
			</div>
		</div>
	</div>
</div>



