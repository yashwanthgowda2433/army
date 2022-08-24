
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
			<h2 style='font-family: "Cooper Black", serif;color:#002060;'>CADET DOSSIERS MANAGEMENT SYSTEM</h2>
		</div>
	</div>
	<div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-2">
			<div class="form-control">
				<label class="form-label">Cadet No :</label>
				<input typt="text" class="form-input" name="cadetno"/>
			</div>
		</div>
	</div>

	<div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4 mb-5">
			<div class="form-control">
				<button class="btn btn-dark" style="width:150px;">Login</button>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
        $("button").click(function(){
			var input = $('input[name=cadetno').val();
			window.location.href="<?php echo base_url('student/index/');?>"+input;
		});
	});
</script>

