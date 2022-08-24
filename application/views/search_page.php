
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
            <h2 style='font-family: "Tw Cen MT";color:#000;'>Student Record Retrieval</h2>
		</div>
	</div>
    <form method="get" action="<?php echo base_url('student/search/'.$id);?>">

    <div class="row">
        <div class="col-sm-6">
		    <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Cadet No</label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" value="<?= $this->input->get('cadetno')?$this->input->get('cadetno'):''?>" name="cadetno" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
            <div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of Admission : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" value="<?= $this->input->get('yoa')?$this->input->get('yoa'):''?>" name="yoa" style="width:100%;"/>
			        </div>
		        </div>
	        </div>
			<div class="row heading-row">
		        <div class="col-sm-4 mt-2">
			        <div class="form-control">
				        <label class="form-label">Year of Discharge : </label>
			        </div>
		        </div>
				<div class="col-sm-7 mt-1">
			        <div class="form-control">
					    <input typt="text" class="form-input" name="yod" value="<?= $this->input->get('yod')?$this->input->get('yod'):''?>" style="width:100%;" />
			        </div>
		        </div>
	        </div>
        </div>
        <div class="col-sm-6">
            <div class="row heading-row" style="min-height: 100%;">
                  <button class="btn btn-dark" style="width:150px;height: max-content;margin-top: auto;margin-bottom: auto;" type="submit">Search</button>
            </div>
        </div>
    </div>
    </form>

	<!-- <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-2">
			<div class="form-control">
				<label class="form-label">Cadet No :</label>
				<input typt="text" class="form-input" name="cadetno"/>
			</div>
		</div>
	</div> -->
<?php
parse_str($_SERVER['QUERY_STRING'],$query_array);
$query_array_pagination=$query_array;
$query_array_page_size=$query_array;

$sort_key=$this->input->get("sort_key");
$sort_type=$this->input->get("sort_type");


unset($query_array['sort_key']);
unset($query_array['sort_type']);

$query_string_sort=http_build_query($query_array);

unset($query_array_pagination['page']);

$query_string_pagination=http_build_query($query_array_pagination);

unset($query_array_page_size['page_size']);

$query_string_page_size=http_build_query($query_array_page_size);


if($sort_type=="asc"){

	$sort_type="desc";
	
} else {
	
	$sort_type="asc";
	
	}
	if(!empty($cadet) || $cadet != ''){
?>
						  

	<div class="row heading-row">
		<div class="col-sm-12 text-center mx-auto mt-4">
        <div class="module-content-section">
	        <div class="table-header-data">
		
	            <div class="left">Showing <?php echo $page_size>sizeof($cadet)?sizeof($cadet):$page_size; ?> of <?php echo $total; ?> | Page <?php echo $current_page; ?> of <?php echo $total_pages; ?></div>
	                <div class="right">
					    Records Per Page:  &nbsp; <select name="page_size" class="filter-form-select" style="width:60px;" onchange="window.location.href='<?php echo site_url("student/search/".$id.'?'.$query_string_page_size); ?>&page_size='+$(this).val()">
						    <option <?php if($this->input->get("page_size")==25): ?>selected="selected"<?php endif; ?> value="25">25</option>
						    <option <?php if($this->input->get("page_size")==50): ?>selected="selected"<?php endif; ?> value="50">50</option>
						    <option <?php if($this->input->get("page_size")==100): ?>selected="selected"<?php endif; ?> value="100">100</option>
						    <option <?php if($this->input->get("page_size")==250): ?>selected="selected"<?php endif; ?> value="250">250</option>
					    </select>
	                </div>
	                <div class="clear"></div>
	
	                </div>
	                <div class="table-container">
						<table>
						  <tr>
								<th>Cadet No</th>
								<th>Name</th>
								<th>DOB</th>
								<th>Year of Join</th>
								<th>Class Joined</th>
								<th>NDA Joined</th>
								
								<th>View File</th>
						  </tr>
						  
						  <?php $k=1;
						  foreach($cadet as $l): ?>
						  <tr>
								<td><?php echo $l->cadet_no; ?></td>
								<td><?php echo $l->cadet_name; ?></td>
								<td><?php echo $l->dob; ?></td>
								<td><?php echo $l->year_of_admn; ?></td>
								<td><?php echo $l->class_joined; ?></td>
								<td><?php echo $l->nda_course; ?></td>
								
								<td>
								    <a href="<?php echo base_url('student/edit_studentdetails/'.$l->cadet_no); ?>" class="" title="Edit Listing"><i class="fas fa-pencil-alt" style=" font-size:1.3em; position:relative; top:2px; color:#ffb800;"></i> Edit</a>

									<a href="<?php echo base_url('student/cadet_view/'.$id.'?cadetno='.$l->cadet_no);?>" style="color:red;cursor:pointer;margin-left:10px;">View</a>
									
								</td>
						  </tr>
						  
						  <?php endforeach;
						   ?>
						</table>
						<div class="data-pagination">
							<?php if($prev_page): ?>
							<a href="<?php echo site_url("student/search/".$id."?page=".$prev_page_num."&".$query_string_pagination); ?>" class="form-button small-button pagination-buttons">Previous</a>
							<?php endif; ?>
							
							<?php
								
								$total=10;
								$start=1;
								
								if($total_pages<=10){
									
									$start=1;
									$total=$total_pages;
								}
								
								if($total_pages==11 and $current_page>=2){ $start=2; $total=($total+$start)>$total_pages?$total_pages:($total+$start); }
								if($total_pages==12 and $current_page>=3){ $start=3;  $total=($total+$start)>$total_pages?$total_pages:($total+$start);}
								if($total_pages==13 and $current_page>=4){ $start=4;  $total=($total+$start)>$total_pages?$total_pages:($total+$start);}
								if($total_pages==14 and $current_page>=5){ $start=5;  $total=($total+$start)>$total_pages?$total_pages:($total+$start);}
								if($total_pages>14 and $current_page>5 and $current_page<$total_pages){ $start=$current_page-5;  $total=($total+$start)>$total_pages?$total_pages:($total+$start);}
								
								if($total_pages>14 and $current_page==$total_pages){ $start=$current_page-10;  $total=($total+$start)>$total_pages?$total_pages:($total+$start); }
								
									
									for($i=$start; $i<=$total; $i++){
										
										if(($i)!=$current_page){
									?>
										<a href="<?php echo site_url("student/search/".$id."?page=".($i-1)."&".$query_string_pagination); ?>" class="form-button small-button pagination-buttons"><?php echo $i; ?></a>
									<?php
								 } else {
									 echo "&nbsp;".$i."&nbsp;";
									 }
									
									}
							?>
							
							<?php if($next_page): ?>
							<a href="<?php echo site_url("student/search/".$id."?page=".$next_page_num."&".$query_string_pagination); ?>" class="form-button small-button pagination-buttons">Next</a>
							<?php endif; ?>
						</div>
                    </div>
		        </div>
	        </div>
       
    </div>
   <?php }?>
    <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4 mb-5">
			<div class="form-control" style="text-align:end;">
				<a class="btn btn-dark m-2" href="<?php echo base_url('student/index/'.$id);?>" id="home" style="width:120px;">Back</a>

				<!-- <button class="btn btn-dark" style="width:150px;" onclick="window.location.href='<?php echo base_url('login/');?>'">Exit</button> -->
			</div>
		</div>
	</div>
</div>


