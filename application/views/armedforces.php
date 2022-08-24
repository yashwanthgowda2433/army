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
<form method="post" action="<?php echo base_url('student/submit_armedforces/'.$id);?>">
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
			<h2 style='font-family: "Tw Cen MT";color:#000;'>Armed Forces Officers Corner</h2>
		</div>
	</div>

	<?php if($armedforces){?>
    <div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-5 mt-2">
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
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Army/Airforce/Navy : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="army" value="<?php echo $armedforces->army_airforce_navy;?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Course Name :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="course" value="<?php echo $armedforces->course_name;?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Academic Year :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="academic" value="<?php echo $armedforces->academic_year;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of Joining :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="yoj" value="<?php echo $armedforces->year_of_joining;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Present Rank :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="rank" value="<?php echo $armedforces->present_rank;?>" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Special Achievements :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea rows="4" class="form-input" name="achievements" style="width:100%;"><?php echo $armedforces->special_achievements;?></textarea>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Honours and Awards :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" rows="4" name="awards" style="width:100%;"><?php echo $armedforces->awards;?></textarea>
			        </div>
		        </div>
	        </div>
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>

	<div class="row" style="display:none;">
        <div class="col-sm-6" id="print">
		<div class="row" style="width:80%;margin:auto">	
		    <div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Cadet No</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					   <div class="form-input">: &nbsp; <?php echo $armedforces->cadet_no;?></div>
			        </div>
		        </div>
	        </div>
            <div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Name</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div class="form-input">: &nbsp; <?php echo $armedforces->name;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Army/ Airforce/ Navy</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div class="form-input">: &nbsp; <?php echo $armedforces->army_airforce_navy;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Course Name</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div class="form-input">: &nbsp; <?php echo $armedforces->course_name;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Academic Year</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div class="form-input">: &nbsp; <?php echo $armedforces->academic_year;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Year of Joining</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div class="form-input">: &nbsp; <?php echo $armedforces->year_of_joining;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Present Rank</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <div class="form-input">: &nbsp; <?php echo $armedforces->present_rank;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Special Achievements</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $armedforces->special_achievements;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Honours and Awards</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $armedforces->awards;?></div>
			        </div>
		        </div>
	        </div>
	    </div>
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>
	<?php }else{?>

	<div class="row">
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-5 mt-2">
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
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Army/Airforce/Navy : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="army" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Course Name :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="course" style="width:100%;" />
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Academic Year :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="academic" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of Joining :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="yoj" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Present Rank :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="rank" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Special Achievements :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea rows="4" class="form-input" name="achievements" style="width:100%;"></textarea>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Honours and Awards :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <textarea class="form-input" rows="4" name="awards" style="width:100%;"></textarea>
			        </div>
		        </div>
	        </div>
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>
	<?php } ?>

    
	
    
	<div class="row mb-5 mt-2">
		
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">
			    <button class="btn btn-dark m-2" id="submit" style="width:120px;">Submit</button>
			    <!-- <div class="btn btn-dark m-2" onclick="printDiv()" style="width:120px;">Print</div> -->

				<a class="btn btn-dark m-2" onclick="history.back()" id="home" style="width:120px;">Back</a>
			</div>
		</div>
	</div>
</form>
</div>
<script>
        function printDiv() {
            var divContents = document.getElementById("print").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
