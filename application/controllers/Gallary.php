<?php

class Gallary extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		//check user login or not
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}
	}

	public function index()
	{	
		if(!$this->Admin_model->is_admin_loged_in() ){
			redirect('admin/login');
		}else{
			redirect('dashboard');
		}
	}


	/*======== Gallary Page view ==========*/
	public function gallery_page_view()
	{
		$data['title'] 		= 'Gallary';
		$data['page_path'] 	= 'admin/gallary/gallary_page';
		$this->load->view('admin/master', $data); 
	}


	// ====== Slider Image Insert In database===========
	public function gallary_image_store()
	{ 
		if($this->Page_model->gallery_image_insert()){

			$data['success'] = 'Image Store Successfully';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}else{
			$data['error'] = 'Some Thing Wrong Try again Later';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}
		
	}


	//========== Slider Image Delete ============
	public function gallery_image_delete($id=null)
	{
		if($this->Page_model->delete_gallery_image($id)){

			$data['success'] = 'Image Delete Successfully';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}else{
			$data['error'] = 'Image Not Deleted. Try Again!';
			$this->session->set_flashData($data);
			redirect('page/gallery_page');
		}
	}
}