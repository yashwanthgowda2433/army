<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use setasign\Fpdi\Fpdi;
require_once('application/libraries/fpdi/autoload.php');
require_once('application/libraries/PDFMerger/PDFMerger.php');

class Student extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	
	
	public function __construct() {
		parent::__construct();
		$this->load->model('cadet_model','cadet');
		$this->load->model('currentdetails_model','currentdetails');
		$this->load->model('Armedforces_model','armedforces');
		$this->load->model('Query_model','query');

		$this->load->library('fpdf/fpdf.php');

	}
	
	
	public function delete_cache($path, $pattern) {
		$path = rtrim(str_replace("\\", "/", $path), '/') . '/';
		$matches = Array();
		$entries = Array();
		$dir = dir($path);
		while (false !== ($entry = $dir->read())) {
		  $entries[] = $entry;
		}
		$dir->close();
		foreach ($entries as $entry) {
		  $fullname = $path . $entry;
		  if ($entry != '.' && $entry != '..' && is_dir($fullname)) {
			$this->delete_cache($fullname, $pattern);
		  } else if (is_file($fullname) && preg_match($pattern, $entry)) {
			unlink($fullname); // delete the file
			echo $fullname," deleted.<br />"; #comment out if you do not want to echo the file deleted.
		  }
		}
	}

	public function index($i)
	{
		$view_params['cadet_no'] = $i;
		$cadet = $this->cadet->get($view_params);
		// print_r($cadet);die;
		$data['cadet'] = $cadet;
		$data['id'] = $i;
		if(!empty($cadet->cadet_name))
		{
			if($cadet->cadet_no == 'admin')
			{
				$this->load->view('includes/header');
		        $this->load->view('admin',$data);
		        $this->load->view('includes/footer');
			}else{
				$this->load->view('includes/header');
		        $this->load->view('studentdetails',$data);
		        $this->load->view('includes/footer');
			}
		}else{
			$this->session->set_flashdata('failed','Record Not Found!');
			redirect(base_url('login/'));
		}
		

	}

	
	public function currentdetails($i)
	{
		$view_params['cadet_no'] = $i;
		$cadet = $this->cadet->get($view_params);
		$data['cadet'] = $cadet;

		$data['currentdetails'] = $this->currentdetails->get($view_params);
		$data['id'] = $i;
		$this->load->view('includes/header');
		$this->load->view('currentdetails',$data);
		// $this->load->view('includes/footer');

	}

	public function armedforces($i)
	{
		$view_params['cadet_no'] = $i;
		$cadet = $this->cadet->get($view_params);
		$data['cadet'] = $cadet;

		$data['armedforces'] = $this->armedforces->get($view_params);
		$data['id'] = $i;
		$this->load->view('includes/header');
		$this->load->view('armedforces',$data);
		// $this->load->view('includes/footer');

	}

	public function query($i)
	{
		$data['id'] = $i;
		$this->load->view('includes/header');
		$this->load->view('query',$data);
		$this->load->view('includes/footer');

	}

	public function submit_currentdetails($id)
	{
		$addparams['cadet_no'] = $id;
		$addparams['name'] = $this->input->post('cadetname');
		$addparams['qualification'] = $this->input->post('qualification');
		$addparams['employment'] = $this->input->post('employment');
		$addparams['designation'] = $this->input->post('designation');
		$addparams['permanent_address'] = $this->input->post('permanent');
		$addparams['current_address'] = $this->input->post('current');
		$addparams['telephone_no'] = $this->input->post('tele');
		$addparams['mobile_no'] = $this->input->post('mobile');
		$addparams['email'] = $this->input->post('email');
		$addparams['spouse_name'] = $this->input->post('spouse');
		$addparams['semployment'] = $this->input->post('emp');
		$addparams['dependents_one'] = $this->input->post('dod1');
		$addparams['dependents_two'] = $this->input->post('dod2');
		$addparams['dependents_three'] = $this->input->post('dod3');
		$addparams['dependents_four'] = $this->input->post('dod4');
		$addparams['dependents_five'] = $this->input->post('dod5');
		$addparams['dependents_six'] = $this->input->post('dod6');

		$addparams['achievements'] = $this->input->post('achievements');

		$currentdetails = $this->currentdetails->get($addparams);
        if($currentdetails){
			$data = $this->currentdetails->edit($addparams);
		}else{
			$data = $this->currentdetails->add($addparams);
		}
		
		if(!empty($this->input->post('cadetname'))){
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
			    redirect(base_url('student/index/'.$id));
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
			    redirect(base_url('student/currentdetails/'.$id));
		    }
		}else{
			redirect(base_url('student/currentdetails/'.$id));
		}
		
	}

	public function submit_armedforces($id)
	{
		$addparams['cadet_no'] = $id;
		$addparams['name'] = $this->input->post('cadetname');
		$addparams['army_airforce_navy'] = $this->input->post('army');
		$addparams['course_name'] = $this->input->post('course');
		$addparams['academic_year'] = $this->input->post('academic');
		$addparams['year_of_joining'] = $this->input->post('yoj');
		$addparams['present_rank'] = $this->input->post('rank');
		$addparams['special_achievements'] = $this->input->post('achievements');
		$addparams['awards'] = $this->input->post('awards');
		
		$armedforces = $this->armedforces->get($addparams);
        if($armedforces){
			$data = $this->armedforces->edit($addparams);
		}else{
			$data = $this->armedforces->add($addparams);
		}
		
		if(!empty($this->input->post('cadetname'))){
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
			    redirect(base_url('student/index/'.$id));
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
			    redirect(base_url('student/armedforces/'.$id));
		    }
		}else{
			redirect(base_url('student/armedforces/'.$id));
		}
		
	}

	public function submit_query($id)
	{
		$addparams['cadet_no'] = $id;
		$addparams['query'] = $this->input->post('query');
		
		$data = $this->query->add($addparams);
		if(!empty($this->input->post('query'))){
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
			    redirect(base_url('student/index/'.$id));
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
			    redirect(base_url('student/query/'.$id));
		    }
		}else{
			redirect(base_url('student/query/'.$id));
		}
		
	}

	public function add($id)
	{
		$data['id'] = $id;
		if(!empty($this->input->post('name')))
		{
			$photo_path = '';
			$pdf_path = '';
			if($_FILES["photo"]["name"])
			{
				$upload_folder = "photo/";
				$newfilename = $this->input->post('cadetno');
				$extension  = pathinfo( $_FILES["photo"]["name"], PATHINFO_EXTENSION );
				$basename = $newfilename . "." . $extension;
				$path = $upload_folder."{$basename}";
				if(move_uploaded_file($_FILES["photo"]["tmp_name"], $path))
				{
					$photo_path = $basename;
				}
			}
			if($_FILES["pdf"]["name"])
			{
				$upload_folder = "pdf/";
				$newfilename = $this->input->post('cadetno');
				$extension  = pathinfo( $_FILES["pdf"]["name"], PATHINFO_EXTENSION );
				$basename = $newfilename . "." . $extension;
				$path = $upload_folder."{$basename}";
				if(move_uploaded_file($_FILES["pdf"]["tmp_name"], $path))
				{
					$pdf_path = $basename;
				}
			}
			$addparams['cadet_no'] = $this->input->post('cadetno');
		    $addparams['cadet_name'] = $this->input->post('name');
		    $addparams['house_name'] = $this->input->post('house');
		    $addparams['dob'] = $this->input->post('dob');
		    $addparams['year_of_admn'] = $this->input->post('admn');
		    $addparams['class_joined'] = $this->input->post('class_joined');
		    $addparams['year_of_discharged'] = $this->input->post('discharge');
		    $addparams['class_left'] = $this->input->post('class_left');
		    $addparams['nda_course'] = $this->input->post('nda');
		    $addparams['photo'] = $photo_path;
		    $addparams['pdf'] = $pdf_path;

		
		    $data = $this->cadet->add($addparams);
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
			    redirect(base_url('student/add/'.$id));
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
			    redirect(base_url('student/add/'.$id));
		    }

		}else{
			$this->load->view('includes/header');
		    $this->load->view('add',$data);
		    $this->load->view('includes/footer');
		}
	}

	public function search($i)
	{
		$page=$this->input->get("page");
			
		if(!$page){
					
			$page=0;
		}
			
		$page_size=25;
			
		if($this->input->get("page_size")>0){
			$page_size=$this->input->get("page_size");
		}
			
		$page_start=$page_size*$page;

		$data['id'] = $i;
		// $view_params['cadet_no'] = $i;
		$view_params['start'] = $page_start;
		$view_params['end'] = $page_size;
		$view_params['cadet_no'] = $this->input->get('cadetno');
		$view_params['year_of_admn'] = $this->input->get('yoa');
		$view_params['year_of_discharged'] = $this->input->get('yod');
        $cadet = '';
		$count=0;
		if(!empty($view_params['year_of_admn']) || !empty($view_params['year_of_discharged'] || !empty($view_params['cadet_no']))){
		    $cadet = $this->cadet->view($view_params);

		    $count = $this->cadet->count($view_params);
		}
		
		$data['cadet'] = $cadet;
		$data['total']=$count;
			$data['page_size']=$page_size;
			$data['current_page']=$page+1;
			$data['total_pages']=$data['total']/$page_size;
			$data['total_pages']=$data['total_pages']<1?1:$data['total_pages'];
			
			if($data['total_pages']>(int)($data['total_pages'])){
				$data['total_pages']=(int)($data['total_pages'])+1;
			}
			
			$data['next_page']=false;
			$data['next_page_num']=$page+1;
			$data['prev_page']=true;
			$data['prev_page_num']=$page-1;
			
			if($data['total']>(($page+1) * $page_size)){
				$data['next_page']=true;
			}
			
			if($page==0){
				$data['prev_page']=false;
			}

		$this->load->view('includes/header');
		$this->load->view('search_page',$data);
		$this->load->view('includes/footer');

	}

	public function cadet_view($i)
	{
		// $this->delete_cache(getenv("DOCUMENT_ROOT"), "/cache/i");

		$data['id'] = $i;
		$view_params['cadet_no'] = $this->input->get('cadetno');
		$cadet = $this->cadet->get($view_params);
		$data['cadet'] = $cadet;
		$this->load->view('includes/header');
		$this->load->view('cadet_view',$data);
		// $this->load->view('includes/footer');

	}
	public function query_view($i)
	{
		$page=$this->input->get("page");
			
		if(!$page){
					
			$page=0;
		}
			
		$page_size=25;
			
		if($this->input->get("page_size")>0){
			$page_size=$this->input->get("page_size");
		}
			
		$page_start=$page_size*$page;

		$data['id'] = $i;
		// $view_params['cadet_no'] = $i;
		$view_params['start'] = $page_start;
		$view_params['end'] = $page_size;
		

		$query = $this->query->get($view_params);

		$count = $this->query->count($view_params);
		
		$data['query'] = $query;
		$data['total']=$count;
			$data['page_size']=$page_size;
			$data['current_page']=$page+1;
			$data['total_pages']=$data['total']/$page_size;
			$data['total_pages']=$data['total_pages']<1?1:$data['total_pages'];
			
			if($data['total_pages']>(int)($data['total_pages'])){
				$data['total_pages']=(int)($data['total_pages'])+1;
			}
			
			$data['next_page']=false;
			$data['next_page_num']=$page+1;
			$data['prev_page']=true;
			$data['prev_page_num']=$page-1;
			
			if($data['total']>(($page+1) * $page_size)){
				$data['next_page']=true;
			}
			
			if($page==0){
				$data['prev_page']=false;
			}

		$this->load->view('includes/header');
		$this->load->view('query_view',$data);
		$this->load->view('includes/footer');

	}

	public function view_querires($i)
	{
		$page=$this->input->get("page");
			
		if(!$page){
					
			$page=0;
		}
			
		$page_size=25;
			
		if($this->input->get("page_size")>0){
			$page_size=$this->input->get("page_size");
		}
			
		$page_start=$page_size*$page;

		$data['id'] = $i;
		// $view_params['cadet_no'] = $i;
		$view_params['start'] = $page_start;
		$view_params['end'] = $page_size;

		$view_params['cadet_no'] = $i;

		

		$query = $this->query->view($view_params);

		$count = $this->query->count($view_params);
		
		$data['query'] = $query;
		$data['total']=$count;
			$data['page_size']=$page_size;
			$data['current_page']=$page+1;
			$data['total_pages']=$data['total']/$page_size;
			$data['total_pages']=$data['total_pages']<1?1:$data['total_pages'];
			
			if($data['total_pages']>(int)($data['total_pages'])){
				$data['total_pages']=(int)($data['total_pages'])+1;
			}
			
			$data['next_page']=false;
			$data['next_page_num']=$page+1;
			$data['prev_page']=true;
			$data['prev_page_num']=$page-1;
			
			if($data['total']>(($page+1) * $page_size)){
				$data['next_page']=true;
			}
			
			if($page==0){
				$data['prev_page']=false;
			}

		$this->load->view('includes/header');
		$this->load->view('view_queries',$data);
		$this->load->view('includes/footer');

	}

	public function currentdetails_view($i)
	{
		$data['id'] = $i;
		$addparams['cadet_no'] = $this->input->get('cadetno');
		$data['currentdetails'] = $this->currentdetails->get($addparams);
		$this->load->view('includes/header');
		$this->load->view('currentdetails_view',$data);
		// $this->load->view('includes/footer');

	}

	public function armedforces_view($i)
	{
		$data['id'] = $i;
		$addparams['cadet_no'] = $this->input->get('cadetno');
		$data['armedforces'] = $this->armedforces->get($addparams);
		$this->load->view('includes/header');
		$this->load->view('armedforces_view',$data);
		// $this->load->view('includes/footer');

	}

	public function edit_query($i)
	{
		$data['id'] = $i;
		$addparams['id'] = $i;
		$data['query'] = $this->query->view_edit($addparams);

		$this->load->view('includes/header');
		$this->load->view('editquery',$data);
		$this->load->view('includes/footer');

	}

	public function submit_edit_query($id)
	{
		$addparams['id'] = $id;
		$addparams['query'] = $this->input->post('query');
		
		$data = $this->query->edit($addparams);
		if(!empty($this->input->post('query'))){
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
			    redirect(base_url('student/view_querires/'.$this->input->post('cadetno')));
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
			    redirect(base_url('student/view_querires/'.$this->input->post('cadetno')));
		    }
		}else{
			redirect(base_url('student/edit_query/'.$id));
		}
		
	}

	public function query_delete($id)
	{
		$addparams['id'] = $id;
		
		
		$data = $this->query->delete($addparams);
		// if(!empty($this->input->post('query'))){
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
				if($this->input->get('admin'))
		        {
					redirect(base_url('student/query_view/admin'));
				}else{
					redirect(base_url('student/view_querires/'.$this->input->get('cadetno')));
				}
			    
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
			    if($this->input->get('admin'))
		        {
					redirect(base_url('student/query_view/admin'));
				}else{
					redirect(base_url('student/view_querires/'.$this->input->get('cadetno')));
				}
		    }
		// }else{
		// 	redirect(base_url('student/edit_query/'.$id));
		// }
		
	}

	public function edit_studentdetails($i)
	{
		$view_params['cadet_no'] = $i;
		if(!empty($this->input->post('name')))
		{
			$photo_path = '';
			$pdf_path = '';
			if($_FILES["photo"]["name"])
			{
				$upload_folder = "photo/";
				$newfilename = $this->input->post('cadetno');
				$extension  = pathinfo( $_FILES["photo"]["name"], PATHINFO_EXTENSION );
				$basename = $newfilename . "." . $extension;
				$path = $upload_folder."{$basename}";
				if(move_uploaded_file($_FILES["photo"]["tmp_name"], $path))
				{
					$photo_path = $basename;
					$addparams['photo'] = $photo_path;

				}
			}
			if($_FILES["pdf"]["name"])
			{
				$upload_folder = "pdf/";
				$newfilename = $this->input->post('cadetno');
				$extension  = pathinfo( $_FILES["pdf"]["name"], PATHINFO_EXTENSION );
				$basename = $newfilename . "." . $extension;
				$path = $upload_folder."{$basename}";
				if(move_uploaded_file($_FILES["pdf"]["tmp_name"], $path))
				{
					$pdf_path = $basename;
					$addparams['pdf'] = $pdf_path;

				}
			}
			$addparams['cadet_no'] = $this->input->post('cadetno');
		    $addparams['cadet_name'] = $this->input->post('name');
		    $addparams['house_name'] = $this->input->post('house');
		    $addparams['dob'] = $this->input->post('dob');
		    $addparams['year_of_admn'] = $this->input->post('admn');
		    $addparams['class_joined'] = $this->input->post('class_joined');
		    $addparams['year_of_discharged'] = $this->input->post('discharge');
		    $addparams['class_left'] = $this->input->post('class_left');
		    $addparams['nda_course'] = $this->input->post('nda');

		
		    $data = $this->cadet->edit($addparams);
			if($data)
		    {
			    $this->session->set_flashdata('success','Successfully submitted');
			    redirect(base_url('student/search/admin?cadetno='.$addparams['cadet_no']));
		    }else{
			    $this->session->set_flashdata('failed','Failed to submit, Please try again!');
				redirect(base_url('student/search/admin?cadetno='.$addparams['cadet_no']));

		    }

		}else{
		   $cadet = $this->cadet->get($view_params);
		   // print_r($cadet);die;
		   $data['cadet'] = $cadet;
		   $data['id'] = $i;
		   if(!empty($cadet->cadet_name))
		   {
			if($cadet->cadet_no == 'admin')
			{
				$this->load->view('includes/header');
		        $this->load->view('edit_studentdetails',$data);
		        $this->load->view('includes/footer');
			}else{
				$this->load->view('includes/header');
		        $this->load->view('edit_studentdetails',$data);
		        $this->load->view('includes/footer');
		 	}
		  }else{
			$this->session->set_flashdata('failed','Record Not Found!');
			redirect(base_url('login/'));
		  }
	    }
		

	}

	public function cd_approve()
	{
		$edit_params['cadet_no']=$this->input->post('cadet_no');
		$edit_params['status']=1;
		$cadet = $this->cadet->get($edit_params);
		$dataURI  = $this->input->post('imgsrc');
		$img = explode(',',$dataURI,2)[1];
        $image = 'data://text/plain;base64,'. $img;
		$text = 'Cadet Current Details';


		$pdf = new Fpdi(); // Array sets the X, Y dimensions in mm'Portrait','mm',array(215.9,279.4)
		$file = 'pdf/'.$cadet->pdf;
		$source = 'pdf/uncompressed.pdf';

		$output = 'export.pdf';
		// $source = base_url('pdf/'.$cadet->pdf);

		// echo $source;die;
        $pagecount = $pdf->setSourceFile($source);
		$pdf->AddPage();
        $tppl = $pdf->importPage($pagecount);
        $pdf->useTemplate($tppl);
 
         // X start, Y start, X width, Y width in mm
		 $pdf->Image($image, 10,10,150,150,'png');
 
        $pdf->SetFont('Helvetica','',10); // Font Name, Font Style (eg. 'B' for Bold), Font Size
        $pdf->SetTextColor(0,0,0); // RGB 
        $pdf->SetXY(78, 10); // X start, Y start in mm
        $pdf->Write(0, $text);
 
        $pdf->Output('pdf/'.$output, "F");

		$pdfm = new \Clegginabox\PDFMerger\PDFMerger;
		$pdfm->addPDF($file, 'all');
		$pdfm->addPDF('pdf/'.$output, 'all');
		$pdfm->merge('file', 'pdf/'.$cadet->pdf, 'P');
		$data = $this->currentdetails->edit($edit_params);

		echo true;

	}
	public function af_approve()
	{
		$edit_params['cadet_no']=$this->input->post('cadet_no');
		$edit_params['status']=1;
		$cadet = $this->cadet->get($edit_params);
		$dataURI  = $this->input->post('imgsrc');
		$img = explode(',',$dataURI,2)[1];
        $image = 'data://text/plain;base64,'. $img;
		$text = 'Armed Forces Officers Corner';


		$pdf = new Fpdi(); // Array sets the X, Y dimensions in mm'Portrait','mm',array(215.9,279.4)
		$file = 'pdf/'.$cadet->pdf;
		$source = 'pdf/uncompressed.pdf';

		$output = 'export.pdf';
		// $source = base_url('pdf/'.$cadet->pdf);

		// echo $source;die;
        $pagecount = $pdf->setSourceFile($source);
		$pdf->AddPage();
        $tppl = $pdf->importPage($pagecount);
        $pdf->useTemplate($tppl);
 
         // X start, Y start, X width, Y width in mm
		 $pdf->Image($image, 10,10,150,150,'png');
 
        $pdf->SetFont('Helvetica','',10); // Font Name, Font Style (eg. 'B' for Bold), Font Size
        $pdf->SetTextColor(0,0,0); // RGB 
        $pdf->SetXY(78, 10); // X start, Y start in mm
        $pdf->Write(0, $text);
 
        $pdf->Output('pdf/'.$output, "F");

		$pdfm = new \Clegginabox\PDFMerger\PDFMerger;
		$pdfm->addPDF($file, 'all');
		$pdfm->addPDF('pdf/'.$output, 'all');
		$pdfm->merge('file', 'pdf/'.$cadet->pdf, 'P');

		$data = $this->armedforces->edit($edit_params);
		echo true;

	}

	public function singlequery_view($i)
	{
		$edit_params['id'] = $this->input->post('id');
		$edit_params['viewed'] = 1;
		$query = $this->query->edit($edit_params);

		$data['id'] = $i;
		$addparams['id'] = $this->input->get('id');
		$data['query'] = $this->query->view_edit($addparams);
		$view_params['cadet_no'] = $this->input->get('cadetno');

		$cadet = $this->cadet->get($view_params);
		$data['cadet'] = $cadet[0];
		$this->load->view('includes/header');
		$this->load->view('singlequery_view',$data);
		$this->load->view('includes/footer');

	}

	public function query_status()
	{
		$edit_params['id'] = $this->input->post('id');
		$edit_params['remarks'] = $this->input->post('remarks');
		$edit_params['status'] = $this->input->post('status');
	

		$query = $this->query->edit($edit_params);
		if($query)
		    {
			    echo TRUE;
		    }else{
				echo FALSE;

		    }

	}

}
