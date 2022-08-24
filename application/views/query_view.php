
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
            <h2 style='font-family: "Tw Cen MT";color:#000;'>View Query Requests</h2>
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

?>
	<div class="row heading-row">
		<div class="col-sm-12 text-center mx-auto mt-4">
        <div class="module-content-section">
	        <div class="table-header-data">
		
	            <div class="left">Showing <?php echo $page_size>sizeof($query)?sizeof($query):$page_size; ?> of <?php echo $total; ?> | Page <?php echo $current_page; ?> of <?php echo $total_pages; ?></div>
	                <div class="right">
					    Records Per Page:  &nbsp; <select name="page_size" class="filter-form-select" style="width:60px;" onchange="window.location.href='<?php echo site_url("student/query_view/".$id.'?'.$query_string_page_size); ?>&page_size='+$(this).val()">
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
								<th>Detailed Query</th>
								<th>Current Details</th>
								<th>Armed Forces Employee Corner</th>
								<th>Created Date</th>
								<th>Status</th>

								<th>Action</th>

								
						  </tr>
						  
						  <?php $k=1;
						  foreach($query as $l): ?>
						  <tr>
								<td><?php echo $l->cadet_no; ?></td>
								<td><?php echo $l->query; ?></td>
								<td>									
                                    <a href="<?php echo base_url('student/currentdetails_view/'.$id.'?cadetno='.$l->cadet_no);?>" style="cursor:pointer;margin-left:10px;">View</a>
                                </td>
								<td>
									<a href="<?php echo base_url('student/armedforces_view/'.$id.'?cadetno='.$l->cadet_no);?>" style="cursor:pointer;margin-left:10px;">View</a>
                                </td>
								<td><?php echo $l->created_on; ?></td>
								<td><?php if($l->status == 1){ echo '<a style="background:green;color:#fff;padding:5px;">Approved</a>';}elseif($l->status == 2){ echo '<a style="background:red;color:#fff;padding:5px;">Rejected</a>'; }else{ echo '<a style="background:yellow;color:#000;padding:5px;">Pending</a>'; } ?></td>

								<td>
								    <a href="<?php echo base_url('student/singlequery_view/'.$id.'?id='.$l->id.'?cadetno='.$l->cadet_no);?>" style="cursor:pointer;margin-left:10px;<?php if($l->viewed == 1){ echo "color:purple;"; }?>">View</a>

								    <a href="<?php echo base_url('student/query_delete/'.$l->id.'?cadetno='.$l->cadet_no.'&admin=admin'); ?>" style="color:red;cursor:pointer;margin-left:10px;">Delete</a>

								</td>
								
						  </tr>
						  
						  <?php endforeach; ?>
						</table>
						<div class="data-pagination">
							<?php if($prev_page): ?>
							<a href="<?php echo site_url("student/query_view/".$id."?page=".$prev_page_num."&".$query_string_pagination); ?>" class="form-button small-button pagination-buttons">Previous</a>
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
										<a href="<?php echo site_url("student/query_view/".$id."?page=".($i-1)."&".$query_string_pagination); ?>" class="form-button small-button pagination-buttons"><?php echo $i; ?></a>
									<?php
								 } else {
									 echo "&nbsp;".$i."&nbsp;";
									 }
									
									}
									
									
							
							?>
							
							<?php if($next_page): ?>
							<a href="<?php echo site_url("student/query_view/".$id."?page=".$next_page_num."&".$query_string_pagination); ?>" class="form-button small-button pagination-buttons">Next</a>
							<?php endif; ?>
						</div>
                    </div>
		        </div>
	        </div>
        </div>
        </div>
   
    <div class="row heading-row">
		<div class="col-sm-10 text-center mx-auto mt-4 mb-5">
			<div class="form-control" style="text-align:end;">
				<a class="btn btn-dark m-2" href="<?php echo base_url('student/index/'.$id);?>" id="home" style="width:120px;">Back</a>

				<!-- <button class="btn btn-dark" style="width:150px;" onclick="window.location.href='<?php echo base_url('login/');?>'">Exit</button> -->
			</div>
		</div>
	</div>
</div>



