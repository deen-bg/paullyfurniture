<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('url');
        $this->load->library('form_validation'); 
        $this->load->library('upload'); 
        $this->load->library('session');
        $this->load->model('Product_model'); 
        $this->load->model('Category_model'); 
		
	}

    public function index()
	{
		redirect('https://paullyfurniture.com/hold.html');
		$data['categories'] = $this->Category_model->fetchActive(); 
		$data['categories_recom'] = $this->Category_model->fetchRecommend();
		$data['categories_lists'] = $this->Category_model->fetchNotRecommend();
		$this->load->view('head', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
}
