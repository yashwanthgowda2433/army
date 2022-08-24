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
    <?php if($armedforces){?>
	<div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-5">
			<h2 style='font-family: "Tw Cen MT";color:#000;'>Armed Forces Employees Corner</h2>
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
					    <input typt="text" class="form-input" name="cadetno" style="width:100%;" value="<?php echo $armedforces->cadet_no;?>" disabled/>
			        </div>
		        </div>
	        </div>
            <div class="row heading-row">
		        <div class="col-sm-5 mt-2">
			        <div class="form-control">
				        <label class="form-label">Name : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="cadetname" value="<?php echo $armedforces->name;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="army" value="<?php echo $armedforces->army_airforce_navy;?>" disabled style="width:100%;" />
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
					    <input typt="text" class="form-input" name="course" value="<?php echo $armedforces->course_name;?>" disabled style="width:100%;" />
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
					    <input typt="text" class="form-input" name="academic" value="<?php echo $armedforces->academic_year;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="yoj" value="<?php echo $armedforces->year_of_joining;?>" disabled style="width:100%;"/>
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
					    <input typt="text" class="form-input" name="rank" value="<?php echo $armedforces->present_rank;?>" disabled style="width:100%;"/>
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
					    <textarea rows="4" class="form-input" name="achievements" disabled style="width:100%;"><?php echo $armedforces->special_achievements;?></textarea>
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
					    <textarea rows="4" class="form-input" name="awards" disabled style="width:100%;"><?php echo $armedforces->awards;?></textarea>
			        </div>
		        </div>
	        </div>
        </div>
        <div class="col-sm-3" style="padding:0;">
		   
	    </div>
		<div class="col-sm-3" style="padding:0;">
		    
	    </div>
    </div>
	<div class="row" >
        <div class="col-sm-6" id="print" style="display:none;">
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
        <div class="row mt-5 mb-5" style="text-align:center;">
            <div class="col-sm-12">
                <h2>No Records Found.</h2>
            </div>
        </div>
    <?php }?>
    
	<div class="row mb-5 mt-2">
		
		<div class="col-sm-12">
		    <div class="row" style="width:max-content;display:flex;flex-wrap: unset;margin-left: 0px;margin:auto;">
			    <?php if($armedforces){if($armedforces->status == 0){?>
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
					var cadet_no = <?php echo $armedforces->cadet_no;?>;
			        $.post('<?php echo base_url('student/af_approve');?>',
			        {cadet_no:cadet_no,imgsrc:imgsrc},function(result){
				        $('#approve').html('<div class="btn btn-dark m-2" style="width:120px;">Approved</div>');
			            $("#print").css('display','none');

			        });
				
			})
			
		}
    </script>