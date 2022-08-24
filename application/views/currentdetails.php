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
<form method="post" action="<?php echo base_url('student/submit_currentdetails/'.$id);?>">
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
			<h2 style='font-family: "Tw Cen MT";color:#000;'>Cadet Current Details</h2>
		</div>
	</div>

	<?php if($currentdetails){?>
    <div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Name : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetname" value="<?php echo $cadet->cadet_name;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Qualification : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="qualification" value="<?php echo $currentdetails->qualification;?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Employment :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="employment"  value="<?php echo $currentdetails->employment;?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Designation :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="designation"  value="<?php echo $currentdetails->designation;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Permanent Address :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" rows="3" name="permanent" style="width:100%;"><?php echo $currentdetails->permanent_address;?></textarea>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Current Address :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" rows="3" name="current" style="width:100%;"><?php echo $currentdetails->current_address;?></textarea>
			        </div>
		        </div>
	        </div>
			
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-12">
			        <h2 style='font-size:20px;text-align:center;color:#000;font-weight: bold;text-decoration: underline;'>Contact Details</h2>
                </div>
            </div>

            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Telephone No : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="tele" value="<?php echo $currentdetails->telephone_no;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Mobile No : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="mobile" value="<?php echo $currentdetails->mobile_no;?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Email ID :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="email" value="<?php echo $currentdetails->email;?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Details of Dependents :</label>
			        </div>
		        </div>
	        </div>
			<!-- <div class="row">
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod1" style="width:100%;"><?php echo $currentdetails->dependents_one;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod2" style="width:100%;"><?php echo $currentdetails->dependents_two;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3"  class="form-input" name="dod3" style="width:100%;"><?php echo $currentdetails->dependents_three;?></textarea>
				</div>

			</div> -->

			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">1</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod1" style="width:100%;"><?php echo $currentdetails->dependents_one;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod2" style="width:100%;"><?php echo $currentdetails->dependents_two;?></textarea>
				</div>
			</div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">2</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod3" style="width:100%;"><?php echo $currentdetails->dependents_three;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod4" style="width:100%;"><?php echo $currentdetails->dependents_four;?></textarea>
				</div>
			</div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">3</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod5" style="width:100%;"><?php echo $currentdetails->dependents_five;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod6" style="width:100%;"><?php echo $currentdetails->dependents_six;?></textarea>
				</div>
			</div>
           
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Special Achievements&nbsp;:</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" name="achievements" style="width:100%;" rows="6"><?php echo $currentdetails->achievements;?></textarea>
			        </div>
		        </div>
	        </div>
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>
	<?php }else{ ?>
	<div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Name : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetname" value="<?php echo $cadet->cadet_name;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Qualification : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="qualification" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Employment :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="employment" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Designation :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="designation" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Permanent Address :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" rows="3" name="permanent" style="width:100%;"></textarea>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Current Address :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" rows="3" name="current" style="width:100%;"></textarea>
			        </div>
		        </div>
	        </div>
			
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-12">
			        <h2 style='font-size:20px;text-align:center;color:#000;font-weight: bold;text-decoration: underline;'>Contact Details</h2>
                </div>
            </div>

            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Telephone No : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="tele" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Mobile No : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="mobile" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Email ID :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="email" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			
			<div class="row heading-row">
		        <div class="col-sm-12 mt-2">
			        <div class="form-control">
				        <label class="form-label">Details of Dependents :</label>
			        </div>
		        </div>
	        </div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">1</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod1" style="width:100%;"></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod2" style="width:100%;"></textarea>
				</div>
			</div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">2</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod3" style="width:100%;"></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod4" style="width:100%;"></textarea>
				</div>
			</div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">3</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod5" style="width:100%;"></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod6" style="width:100%;"></textarea>
				</div>
			</div>
           
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Special Achievements&nbsp;:</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" name="achievements" style="width:100%;" rows="6"></textarea>
			        </div>
		        </div>
	        </div>
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>
	<?php }?>

	
    
	<div class="row mb-5 mt-2">
		
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">
			    <button class="btn btn-dark m-2" id="submit" style="width:120px;">Submit</button>
				<a class="btn btn-dark m-2" href="<?php echo base_url('student/index/'.$id);?>" id="home" style="width:120px;">Back</a>
			</div>
		</div>
	</div>
</form>
</div>

