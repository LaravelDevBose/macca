<?php

class Service extends CI_Controller
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
	public function service_price_page()
	{
		$data['title'] 		= 'Service & Price';
		$data['page_path'] 	= 'admin/service/service_page';
		$this->load->view('admin/master', $data); 
	}
}