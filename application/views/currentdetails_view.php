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

<div class="container">
    <?php if($currentdetails){?>
        <div class="row heading-row">
                <div class="col-sm-10 text-center mx-auto mt-2">
			        <h2 style='font-family: "Tw Cen MT";color:#000;'>Cadet Current Details</h2>
		        </div>
	        </div>
	
    <div class="row">
        <div class="col-sm-6">
		    <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Cadet No :</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetno" style="width:100%;" value="<?php echo $currentdetails->cadet_no;?>" disabled/>
			        </div>
		        </div>
	        </div>
            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Name : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetname" value="<?php echo $currentdetails->name;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="qualification" value="<?php echo $currentdetails->qualification;?>" disabled style="width:100%;" />
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
					    <input typt="text" class="form-input" name="employment" value="<?php echo $currentdetails->employment;?>" disabled style="width:100%;" />
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
					    <input typt="text" class="form-input" name="designation" value="<?php echo $currentdetails->designation;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="permanent" value="<?php echo $currentdetails->permanent_address;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="current" value="<?php echo $currentdetails->current_address;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="tele" value="<?php echo $currentdetails->telephone_no;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="mobile" value="<?php echo $currentdetails->mobile_no;?>" disabled style="width:100%;" />
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
					    <input typt="text" class="form-input" name="email" value="<?php echo $currentdetails->email;?>" disabled style="width:100%;" />
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
				   <textarea rows="3" class="form-input" name="dod1" style="width:100%;" disabled><?php echo $currentdetails->dependents_one;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod2" style="width:100%;" disabled><?php echo $currentdetails->dependents_two;?></textarea>
				</div>
			</div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">2</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod3" style="width:100%;" disabled><?php echo $currentdetails->dependents_three;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod4" style="width:100%;" disabled><?php echo $currentdetails->dependents_four;?></textarea>
				</div>
			</div>
			<div class="row">
			    <div class="col-sm-3"></div>

			    <div class="col-sm-1" style="display: flex;align-items: center;">
				   <h6 style="text-align:right;">3</h6>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod5" style="width:100%;" disabled><?php echo $currentdetails->dependents_five;?></textarea>
				</div>
				<div class="col-sm-4">
				   <textarea rows="3" class="form-input" name="dod6" style="width:100%;" disabled><?php echo $currentdetails->dependents_six;?></textarea>
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
					    <textarea class="form-input" name="achievements" disabled style="width:100%;" rows="6"><?php echo $currentdetails->achievements;?></textarea>
			        </div>
		        </div>
	        </div>
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>

	<div class="row" id="print" style="display:none;">
	  <div class="row" style="width:80%;margin:auto">	
        <div class="col-sm-6">
		    <div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Cadet No</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->cadet_no;?></div>
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
					    <div>: &nbsp; <?php echo $currentdetails->name;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Qualification</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->qualification;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Employment</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->employment;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Designation</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->designation;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Permanent Address</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->permanent_address;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Current Address</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->current_address;?></div>
			        </div>
		        </div>
	        </div>
			
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>

    <div class="row" style="width:80%;margin:auto">	
        <div class="col-sm-6">
            <div class="row heading-row">
		        <div class="col-sm-12">
			        <h2 style='font-size:20px;text-align:center;color:#000;font-weight: bold;text-decoration: underline;'>Contact Details</h2>
                </div>
            </div>
			
            <div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Telephone No</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->telephone_no;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Mobile No</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->mobile_no;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Email ID</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->email;?></div>
			        </div>
		        </div>
	        </div>
			<!-- <div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Spouse Name</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->spouse_name;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Employment</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->semployment;?></div>
			        </div>
		        </div>
	        </div> -->
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:80%;">
			        <div class="form-control">
				        <label class="form-label">Details of Dependents :</label>
			        </div>
		        </div>
	        </div>
            <div class="row heading-row">
		        <div class="col-sm-7 mt-2" style="margin-top:5px;">
			        <div class="form-control" style="display:flex;">
					     <div style="width:1%;margin:10px;"><label class="form-label">1)&nbsp;&nbsp;&nbsp;</label></div>
                        <div style="width:40%;margin:10px;"><?php echo $currentdetails->dependents_one;?></div>
                        <div style="width:40%;margin:10px;"><?php echo $currentdetails->dependents_two;?></div>

			        </div>
		        </div>
	        </div>
            <div class="row heading-row">
		        <div class="col-sm-7 mt-2" style="margin-top:5px;">
			        <div class="form-control" style="display:flex;">
					    <div style="width:1%;margin:10px;"><label class="form-label">2)&nbsp;&nbsp;&nbsp;</label></div>
                        <div style="width:40%;margin:10px;"><?php echo $currentdetails->dependents_three;?></div>
                        <div style="width:40%;margin:10px;"><?php echo $currentdetails->dependents_four;?></div>
			        </div>
		        </div>
	        </div>
            <div class="row heading-row">
		        <div class="col-sm-7 mt-2" style="margin-top:5px;">
			        <div class="form-control" style="display:flex;">
					<div style="width:1%;margin:10px;"><label class="form-label">3)&nbsp;&nbsp;&nbsp;</label></div>
                        <div style="width:40%;margin:10px;"><?php echo $currentdetails->dependents_five;?></div>
                        <div style="width:40%;margin:10px;"><?php echo $currentdetails->dependents_six;?></div>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row" style="display:flex;margin-top:20px;">
		        <div class="col-sm-5 mt-2" style="width:20%;">
			        <div class="form-control">
				        <label class="form-label">Special Achievements</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1" style="width:80%;">
			        <div class="form-control">
					    <div>: &nbsp; <?php echo $currentdetails->achievements;?></div>
			        </div>
		        </div>
	        </div>
			
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>
	</div>
	
    <?php }else{?>
        <div class="row mt-5 mb-5" style="text-align:center;">
            <div class="col-sm-12">
                <h2>No Records Found.</h2>
            </div>
        </div>
    <?php }?>
	<div class="row mb-5 mt-2">
		
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">
			    <?php if($currentdetails){if($currentdetails->status == 0){?>
				<div id="approve"><div class="btn btn-dark m-2" onclick="approve()" style="width:120px;">Approve</div></div>


				<?php }}?>

			    <button class="btn btn-dark m-2" onclick="printDiv()" style="width:120px;">Print</button>

				<a class="btn btn-dark m-2" onclick="history.back()" id="home" style="width:120px;">Back</a>
				<!-- <a class="btn btn-dark m-2" href="<?php echo base_url('login/');?>" id="exit" style="width:120px;">Exit</a> -->
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

		function approve()
		{
			$("#print").css('display','block');
			html2canvas($("#print")[0],{scale: 2}).then(function(canvas) {
					var imgsrc = canvas.toDataURL('image/png');
					console.log(imgsrc);
					var cadet_no = <?php echo $currentdetails->cadet_no;?>;
			        $.post('<?php echo base_url('student/cd_approve');?>',
			        {cadet_no:cadet_no,imgsrc:imgsrc},function(result){
				        $('#approve').html('<div class="btn btn-dark m-2" style="width:120px;">Approved</div>');
			            $("#print").css('display','none');

			        });
				
			})
			
		}
    </script>
