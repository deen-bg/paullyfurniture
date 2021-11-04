<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation'); 
        $this->load->library('upload'); 
        $this->load->library('session');
        $this->load->model('Product_model'); 
        $this->load->model('About_model');
        $this->load->model('Category_model'); 
        $this->load->model('upload_product_model'); 

	}
    
	public function home(){
        if(!empty($this->session->userdata('user'))){
           
            $this->load->view('admin/home'); // 
        }
        else{
            
            redirect('Login','refresh');
        }
    }
    public function category()
    {
        if(!empty($this->session->userdata('user'))){
            $data['categories'] = $this->Category_model->fetchAll(); 
            $this->load->view('admin/category', $data); //  
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function form_category()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->load->view('admin/form_category'); //  
        }
        else{
            redirect('Login','refresh');
        }

    }
     public function create_category()
    {
        if(!empty($this->session->userdata('user'))){
            $this->security->get_csrf_token_name();
            $this->security->get_csrf_hash();
            $name = $this->security->xss_clean($this->input->post('name', TRUE));

            if(!empty($_FILES['covImg']['name'])){
                        
                $config['upload_path'] = './assets/images/category/';
                $config['file_name']        = $_FILES['covImg']['name'];
                $config['allowed_types']    = 'jpg|png|jpeg|JPG|PNG|JPEG'; 
                $config['file_ext_tolower'] = TRUE;
                $config['overwrite']        = TRUE;
                $config['max_size']         = '0'; 
                $config['max_width']        = '0'; 
                $config['max_height']       = '0'; 
                $config['max_filename']     = '0';
                $config['remove_spaces']    = TRUE; 
                $config['detect_mime']      = TRUE; 
                $config['encrypt_name']     = TRUE;
    
                $this->upload->initialize($config); 
                $this->upload->do_upload('covImg'); 
                        
                $file_upload=$this->upload->data('file_name'); 
                if($this->upload->display_errors()){ 
                    echo $this->upload->display_errors();  
                }else{  
                    $image_type=$this->upload->data('image_type');
                    $file_size=$this->upload->data('file_size');
                    $file_path=$this->upload->data('file_path');
                }
            }
            
            $dataArr = array(
                'image_cover'   =>  @$file_upload,
                'name'          =>  $name
            );

            $response = $this->Category_model->create($dataArr);
            if($response > 0){
                echo "<script>
                    alert('Success!');
                    window.location.href='".base_url("Admin/category")."';
                </script>";
            } else {
                echo "<script>
                    alert('failed!');
                    window.location.href='".base_url("Admin/category")."';
                </script>";
            }
        }
        else{
            redirect('Login','refresh');
        }

    }
   
    public function edit_category()
    {
        if(!empty($this->session->userdata('user'))){
            $c_id = $this->uri->segment(3);
            $data['cate_descs'] = $this->Category_model->getDesc($c_id); 
            $this->load->view('admin/form_category_edit', $data); //  
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function update_category()
    {
        if(!empty($this->session->userdata('user'))){
            $this->security->get_csrf_token_name();
            $this->security->get_csrf_hash();
            $name = $this->security->xss_clean($this->input->post('name', TRUE));
            $category_id = $this->security->xss_clean($this->input->post('category_id', TRUE));

            if(!empty($_FILES['covImg']['name'])){
                        
                $config['upload_path'] = './assets/images/category/';
                $config['file_name']        = $_FILES['covImg']['name'];
                $config['allowed_types']    = 'jpg|png|jpeg|JPG|PNG|JPEG'; 
                $config['file_ext_tolower'] = TRUE;
                $config['overwrite']        = TRUE;
                $config['max_size']         = '0'; 
                $config['max_width']        = '0'; 
                $config['max_height']       = '0'; 
                $config['max_filename']     = '0';
                $config['remove_spaces']    = TRUE; 
                $config['detect_mime']      = TRUE; 
                $config['encrypt_name']     = TRUE;
    
                $this->upload->initialize($config); 
                $this->upload->do_upload('covImg'); 
                        
                $file_upload=$this->upload->data('file_name'); 
                if($this->upload->display_errors()){ 
                    echo $this->upload->display_errors();  
                }else{  
                    $image_type=$this->upload->data('image_type');
                    $file_size=$this->upload->data('file_size');
                    $file_path=$this->upload->data('file_path');
                }
            }
            
            $dataArr = array(
                'image_cover'   =>  @$file_upload,
                'name'          =>  $name,
                'id'            =>  $category_id
            );

            $response = $this->Category_model->update($dataArr);
            if($response > 0){
                echo "<script>
                    alert('Success!');
                    window.location.href='".base_url("Admin/category")."';
                </script>";
            } else {
                echo "<script>
                    alert('failed!');
                    window.location.href='".base_url("Admin/category")."';
                </script>";
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function delCategory()
    {
        $this->security->get_csrf_token_name(); 
        if(!empty($this->session->userdata('user')) && !empty($this->security->get_csrf_hash())){
            $c_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $c_st = $this->security->xss_clean($this->input->post('st', TRUE));
            $c_action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($c_id) && $c_action =='delCategory'){
                $response = $this->Category_model->update_isactive($c_id,$c_st);
                
                if($response == 1){
                    echo 'true';
                } else {
                    echo 'false';
                }
            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function product()
    {
        if(!empty($this->session->userdata('user'))){
            
            $data['products'] = $this->Product_model->fetchAll();
            $this->load->view('admin/list_product', $data); //    
        }
        else{
            redirect('Login','refresh');
        }

    }
    public function form_product()
    {
        if(!empty($this->session->userdata('user'))){
            $data['categories'] = $this->Category_model->fetchActive();
            $this->load->view('admin/form_product',$data); //  
        }
        else{
            redirect('Login','refresh');
        }
    }
    // add new product
    public function create_product(){ 
        if(!empty($this->session->userdata('user'))){
            $this->security->get_csrf_token_name();
            $this->security->get_csrf_hash();
    
            $name = $this->security->xss_clean($this->input->post('name', TRUE));
            $type = $this->security->xss_clean($this->input->post('type', TRUE));
            $price = $this->security->xss_clean($this->input->post('price', TRUE));
            $description = $this->input->post('description', FALSE);
    
            $data = array(
                'name'          => $name,
                'type'          => $type,
                'price'         => $price,
                'description'   => $description
            );
            $last_pid = $this->Product_model->create($data); 
            if($last_pid > 0){
                if(!empty($_FILES['covImg']['name'])){
                    $folderName = './assets/images/product/cover/'.$last_pid.'/';
                    if(!is_dir($folderName))
                    {
                        mkdir($folderName,0777);
                        $config['upload_path'] = $folderName; 
                    } else{
                        $config['upload_path'] = $folderName;
                    }

                    $config['file_name']        = $_FILES['covImg']['name'];
                    $config['allowed_types']    = 'jpg|png|jpeg|JPG|PNG|JPEG';
                    $config['file_ext_tolower'] = TRUE; 
                    $config['overwrite']        = TRUE; 
                    $config['max_size']         = '0';  
                    $config['max_width']        = '0';  
                    $config['max_height']       = '0'; 
                    $config['max_filename']     = '0'; 
                    $config['remove_spaces']    = TRUE; 
                    $config['detect_mime']      = TRUE;
                    $config['encrypt_name']     = FALSE;
        
                    $this->upload->initialize($config);    
                    $this->upload->do_upload('covImg'); 
                        
                    $file_upload=$this->upload->data('file_name');  
                    if($this->upload->display_errors()){ 
                        echo $this->upload->display_errors();  
                    }else{  
                        $image_type=$this->upload->data('image_type');
                        $file_size=$this->upload->data('file_size');
                        $file_path=$this->upload->data('file_path');
        
                        $dataArr = array(
                            'image_cover'   => $file_upload,
                            'pd_id'         => $last_pid
                        );
                        // update image_cover where last id
                        $resimg = $this->Product_model->updatefileUpload($dataArr);
                    }
                }
                // uploda images
                $dataimg = array(); // Count total files
                $countfiles = count($_FILES['productImg']['name']);
                if($countfiles > 0){
                    $folderName = './assets/images/product/'.$last_pid.'/';
                    if(!is_dir($folderName))
                    {
                        mkdir($folderName,0777);
                        $config['upload_path'] = $folderName; 
                    } else{
                        $config['upload_path'] = $folderName;
                    }
                    // Looping all files 
                    for($i=0;$i<$countfiles;$i++){
                        if(!empty($_FILES['productImg']['name'][$i])){
                            $_FILES['file']['name'] = $_FILES['productImg']['name'][$i];
                            $_FILES['file']['type'] = $_FILES['productImg']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['productImg']['tmp_name'][$i];
                            $_FILES['file']['error'] = $_FILES['productImg']['error'][$i];
                            $_FILES['file']['size'] = $_FILES['productImg']['size'][$i];
            
                            $config['upload_path'] = $folderName;
                            $config['file_name'] = $_FILES['productImg']['name'][$i];
                            $config['allowed_types']    = 'jpg|png|jpeg|JPG|PNG|JPEG'; 
                            $config['file_ext_tolower'] = TRUE; 
                            $config['overwrite']        = TRUE; 
                            $config['max_size']         = '0'; 
                            $config['max_width']        = '0'; 
                            $config['max_height']       = '0'; 
                            $config['max_filename']     = '0'; 
                            $config['remove_spaces']    = TRUE; 
                            $config['detect_mime']      = TRUE;
                            $config['encrypt_name']     = FALSE;
                
                            $this->upload->initialize($config);
                            if($this->upload->do_upload('file')){
                                $uploadData = $this->upload->data();
                                $filename1 = $uploadData['file_name'];

                                $dataArr2[] = array(
                                    'image_cover'   => $filename1,
                                );
                            }
                        }
                    }
                    $response = $this->Product_model->insertProductImg($dataArr2,$last_pid);

                    if($response > 0){
                        echo "<script>
                            alert('Success!');
                                window.location.href='".base_url("Admin/product")."';
                        </script>";
                    } else {
                        echo "<script>
                            alert('failed!');
                            window.location.href='".base_url("Admin/product")."';
                        </script>";
                    }
                } else {
                    echo "<script>
                        alert('Please Upload album');
                        window.location.href='".base_url("Admin/product")."';
                    </script>";
                }
                // end

            } else {
                echo "<script>
                    alert('failed! Please try again!');
                    window.location.href='".base_url("Admin/form_product")."';
                </script>";
            }   
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function albums()
    {
        if(!empty($this->session->userdata('user'))){
            $p_id = $this->uri->segment(3);
            $data['product_name'] = $this->Product_model->getName($p_id); 
            $data['product_images'] = $this->Product_model->getImages($p_id); 

            $this->load->view('admin/product_album', $data); //  
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function change_isrecommend()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
            $p_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $p_st = $this->security->xss_clean($this->input->post('st', TRUE));
            $p_action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($p_id) && $p_action =='change'){
                $response = $this->Product_model->update_isrecommend($p_id,$p_st);
                
                if($response == 1){
                    echo 'true';
                } else {
                    echo 'false';
                }

            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }

    }
    public function change_isnewpd()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
           
            $p_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $p_st = $this->security->xss_clean($this->input->post('st', TRUE));
            $p_action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($p_id) && $p_action =='change'){
                $response = $this->Product_model->update_isnew($p_id,$p_st);
                
                if($response == 1){
                    echo 'true';
                } else {
                    echo 'false';
                }

            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function changeProductStatus()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
            $p_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $p_st = $this->security->xss_clean($this->input->post('st', TRUE));
            $p_action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($p_id) && $p_action =='changeStatus'){
                $response = $this->Product_model->update_isactive($p_id,$p_st);
                
                if($response == 1){
                    echo 'true';
                } else {
                    echo 'false';
                }

            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function addTitleServImg()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
            $product_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $action = $this->security->xss_clean($this->input->post('action', TRUE));
            $title = $this->security->xss_clean($this->input->post('title', TRUE));
            
            if(!empty($product_id) && $action =='addTitle'){
                $response = $this->Product_model->update_title($product_id,$title);
                
                if($response == 1){
                    echo 'true';
                } else {
                    echo 'false';
                }

            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function change_isactive()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
           
            $simg_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $st = $this->security->xss_clean($this->input->post('st', TRUE));
            $action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($simg_id) && $action =='change'){
                $response = $this->Product_model->update_status($simg_id,$st);
                if($response > 0){
                    echo 'true';
                } else {
                    echo 'false';
                }
            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function distroyServImage()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
            $simg_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($simg_id) && $action =='distroy'){
                $response = $this->Product_model->distroy_image($simg_id);
                if($response > 0){
                    echo 'true';
                } else {
                    echo 'false';
                }
            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function edit_product()
    {   
        if(!empty($this->session->userdata('user'))){
            $pid = $this->uri->segment(3);
            $data['categories'] = $this->Category_model->fetchActive();
            $data['prod_descs'] = $this->Product_model->getDesc($pid); 
            $this->load->view('admin/form_product_edit', $data); //  
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function updateProduct(){
        if(!empty($this->session->userdata('user'))){
            $this->security->get_csrf_token_name();
            $this->security->get_csrf_hash();
    
            $name = $this->security->xss_clean($this->input->post('name', TRUE));
            $type = $this->security->xss_clean($this->input->post('type', TRUE));
            $price = $this->security->xss_clean($this->input->post('price', TRUE));
            $description = $this->input->post('description', FALSE);
            $product_id = $this->security->xss_clean($this->input->post('product_id', TRUE));
    
            $data = array(
                'name'          => $name,
                'type'          => $type,
                'price'         => $price,
                'description'   => $description,
                'product_id'    => $product_id
            );

            $res1 = $this->Product_model->update($data); 
            if(!empty($_FILES['covImg']['name'])){
                $folderName = './assets/images/product/cover/'.$product_id.'/';
                if(!is_dir($folderName))
                {
                    mkdir($folderName,0777);
                    $config['upload_path'] = $folderName; 
                } else{
                    $config['upload_path'] = $folderName;
                }

                $config['file_name']        = $_FILES['covImg']['name'];
                $config['allowed_types']    = 'jpg|png|jpeg|JPG|PNG|JPEG';
                $config['file_ext_tolower'] = TRUE; 
                $config['overwrite']        = TRUE; 
                $config['max_size']         = '0';  
                $config['max_width']        = '0';  
                $config['max_height']       = '0'; 
                $config['max_filename']     = '0'; 
                $config['remove_spaces']    = TRUE; 
                $config['detect_mime']      = TRUE;
                $config['encrypt_name']     = FALSE;
        
                $this->upload->initialize($config);    
                $this->upload->do_upload('covImg'); 
                        
                $file_upload=$this->upload->data('file_name');  
                if($this->upload->display_errors()){ 
                        echo $this->upload->display_errors();  
                }else{  
                    $image_type=$this->upload->data('image_type');
                    $file_size=$this->upload->data('file_size');
                    $file_path=$this->upload->data('file_path');
        
                    $dataArr = array(
                        'image_cover'   => $file_upload,
                        'pd_id'         => $product_id
                    );
                    $res2 = $this->Product_model->updatefileUpload($dataArr);
                }
            }
            // uploda images
            $dataimg = array(); // Count total files
            $countfiles = count($_FILES['productImg']['name']);
            if($countfiles > 0){
                $folderName = './assets/images/product/'.$product_id.'/';
                if(!is_dir($folderName))
                {
                    mkdir($folderName,0777);
                    $config['upload_path'] = $folderName; 
                } else{
                    $config['upload_path'] = $folderName;
                }
                // Looping all files 
                for($i=0;$i<$countfiles;$i++){
                    if(!empty($_FILES['productImg']['name'][$i])){
                        $_FILES['file']['name'] = $_FILES['productImg']['name'][$i];
                        $_FILES['file']['type'] = $_FILES['productImg']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['productImg']['tmp_name'][$i];
                        $_FILES['file']['error'] = $_FILES['productImg']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['productImg']['size'][$i];
            
                        $config['upload_path'] = $folderName;
                        $config['file_name'] = $_FILES['productImg']['name'][$i];
                        $config['allowed_types']    = 'jpg|png|jpeg|JPG|PNG|JPEG'; 
                        $config['file_ext_tolower'] = TRUE; 
                        $config['overwrite']        = TRUE; 
                        $config['max_size']         = '0'; 
                        $config['max_width']        = '0'; 
                        $config['max_height']       = '0'; 
                        $config['max_filename']     = '0'; 
                        $config['remove_spaces']    = TRUE; 
                        $config['detect_mime']      = TRUE;
                        $config['encrypt_name']     = FALSE;
                
                        $this->upload->initialize($config);
                        if($this->upload->do_upload('file')){
                            $uploadData = $this->upload->data();
                            $filename1 = $uploadData['file_name'];

                            $dataArr2[] = array(
                                'image_cover'   => $filename1,
                            );
                        }
                    }
                }
                $res3 = $this->Product_model->insertProductImg($dataArr2,$product_id);

                if($res1 > 0 ||$res2 > 0 || $res3 > 0){
                    echo "<script>
                        alert('Success!');
                            window.location.href='".base_url("Admin/product")."';
                    </script>";
                } else {
                    echo "<script>
                        alert('failed!');
                        window.location.href='".base_url("Admin/product")."';
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Please Upload album');
                    window.location.href='".base_url("Admin/product")."';
                </script>";
            }
            // end 
        }
        else{
            redirect('Login','refresh');
        }
    }
    public function category_isrecommend()
    {
        if(!empty($this->session->userdata('user'))){
            
            $this->security->get_csrf_token_name(); 
            $this->security->get_csrf_hash();
            // id:$('#p_id').val(),st:$('#p_st').val(), action:'change',
            $c_id = $this->security->xss_clean($this->input->post('id', TRUE));
            $c_st = $this->security->xss_clean($this->input->post('st', TRUE));
            $c_action = $this->security->xss_clean($this->input->post('action', TRUE));
            
            if(!empty($c_id) && $c_action =='change'){
                $response = $this->Category_model->update_isrecommend($c_id,$c_st);
                
                if($response == 1){
                    echo 'true';
                } else {
                    echo 'false';
                }

            } else{
                echo 'false';
            }
        }
        else{
            redirect('Login','refresh');
        }

    }

    // public function userManual()
    // {
    //     if(!empty($this->session->userdata('user'))){
    //         $this->load->helper('download');
    //         $file = './assets/file/glovepfs.pdf';
    //         force_download($file, NULL);
    //     }
    //     else{
    //         redirect('Login','refresh');
    //     }
    // }
}

