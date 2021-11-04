<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->library('form_validation'); 
		$this->load->model('Product_model');
		$this->load->model('Category_model'); 
		
	}

	public function category()
	{
		$c_id = $this->uri->segment(2);
		$data['product_groups'] = $this->Product_model->fetchByCategoryId($c_id);
		$data['nums'] = count($data['product_groups']);
		$data['categories'] = $this->Category_model->fetchActive();
		
		$this->load->view('head',$data);
		$this->load->view('product/product_category',$data);
		$this->load->view('footer');

	}
	public function detail()
	{
		$product_id= $this->uri->segment(2);
	
		$data['categories'] = $this->Category_model->fetchActive();
		$data['productdescs'] = $this->Product_model->getDesc($product_id);

		$data['albums_thumbnails'] = $this->Product_model->getImagesActive($product_id);
		$data['nums'] = count($data['albums_thumbnails']);

		$data['product_relateds'] = $this->Product_model->rands_list();

		$this->load->view('head',$data);
		$this->load->view('product/product_detail',$data);
		$this->load->view('footer');
	}
		
}
