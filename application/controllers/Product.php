<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination'); // load pagination
		$this->load->library('form_validation'); 
		$this->load->model('Product_model');
		$this->load->model('Category_model'); 
		
	}

	// call products by category id
	public function category()
	{
		redirect('https://paullyfurniture.com/hold.html');
		$c_id = $this->uri->segment(2);
		$data['product_groups'] = $this->Product_model->fetchByCategoryId($c_id);
		$data['nums'] = count($data['product_groups']);
		$data['categories'] = $this->Category_model->fetchActive(); // dropdown menu
		
		$this->load->view('head',$data);
		$this->load->view('product/product_category',$data);
		$this->load->view('footer');

	}
	public function detail()
	{
		redirect('https://paullyfurniture.com/hold.html');
		$product_id= $this->uri->segment(2);
	
		$data['categories'] = $this->Category_model->fetchActive(); // dropdown menu
		$data['productdescs'] = $this->Product_model->getDesc($product_id); // descs

		$data['albums_thumbnails'] = $this->Product_model->getImagesActive($product_id); // images
		$data['nums'] = count($data['albums_thumbnails']);

		$data['product_relateds'] = $this->Product_model->rands_list(); // our product

		$this->load->view('head',$data);
		$this->load->view('product/product_detail',$data);
		$this->load->view('footer');
	}



	// public function page()
	// {
	// 	$_get = $this->security->xss_clean($this->input->get());
         
    //         $config['base_url'] = base_url().'product-all/';
    //         if (count($_get) > 0) $config['suffix'] = '/?' . http_build_query($_get, '', "&");
    //         if (count($_get) > 0) $config['first_url'] = $config['base_url'].'/?'.http_build_query($_get);
    //         $config['total_rows'] = $this->Product_model->countAllActive(); // จำนวนข้อมูลทั้งหมด
			
    //         $config['per_page'] = 4;        
    //         $config['uri_segment'] = 2;   
    //         $config['full_tag_open'] = '<ul class="pagination justify-content-center" style="font-size: 16px;">';        
	// 		$config['full_tag_close'] = '</ul>';        
	// 		$config['first_link'] = 'First';        
	// 		$config['last_link'] = 'Last';        
	// 		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
	// 		$config['first_tag_close'] = '</span></li>';        
	// 		$config['prev_link'] = '&laquo';        
	// 		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
	// 		$config['prev_tag_close'] = '</span></li>';        
	// 		$config['next_link'] = '&raquo';        
	// 		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
	// 		$config['next_tag_close'] = '</span></li>';        
	// 		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
	// 		$config['last_tag_close'] = '</span></li>';        
	// 		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
	// 		$config['cur_tag_close'] = '</a></li>';        
	// 		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
    // 		$config['num_tag_close'] = '</span></li>';
 
    //         $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
 
    //         $this->pagination->initialize($config);        
    //         $data['page_start'] = $page;
    //         $data['pagination'] = $this->pagination->create_links();        
    //         $data['products_lists'] = $this->Product_model->get_page_date($config["per_page"], $page); // 

	// 		$data['products_new'] = $this->Product_model->new_product(); // new
	// 		$data['product_recomm'] = $this->Product_model->fetchRecommend();

    //         $this->load->view('head',$data);
    //         $this->load->view('product/product_all',$data);
	// 		$this->load->view('footer');
	// }
	
}
