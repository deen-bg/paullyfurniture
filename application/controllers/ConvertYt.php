<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConvertYt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('upload'); 
        $this->load->library('session');
	}

    function getYoutubeEmbedUrl($url){
        $this->security->get_csrf_token_name();
        $this->security->get_csrf_hash();

        if(!empty($this->session->userdata('user'))){
            $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_]+)\??/i';
            $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))(\w+)/i';
        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
    
        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        return 'https://www.youtube.com/embed/' . $youtube_id ;  
        } else {
            redirect('Login','refresh');
        }        
    }
}
