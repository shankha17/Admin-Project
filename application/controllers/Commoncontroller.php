<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class commoncontroller extends MX_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('commoncontroller_model');
            
    }
    
   public function commonLayoutView($viewPath,$viewData){
		$data_header=array();
		$data_side=array();
		$viewPartialPath='cms_admin/';
		
		if($this->uri->segment(2)<>'login'){
		
		$data_side['banner_list']='cms-admin/banner/index/';
		$data_side['catagory_list']='cms-admin/catagory/index/';
		$data_side['subcatagory_list']='cms-admin/subcatagory/index/';
		$data_side['product_list']='cms-admin/product/index';
		$data_side['attribute_master_list']='cms-admin/attribute_master/index/';
		$data_side['attribute_list']='cms-admin/attribute/index/';
		$data_side['content_list']='cms-admin/content/index/';
		$data_side['aboutus_list']='cms-admin/aboutus/index/';
		$data_side['blog_list']='cms-admin/blog/index/';
	##################################################################
		$data_side['offer_list']='cms-admin/offer/index/';
	##############################################################
		//$data_side['attribute_list']='';
		//$data_side['franchise_list']='';
		//$data_side['jobseeker_list']='';
	#################################################################
		//$data_side['store_locator_list']='';
		//$data_side['newsletter_list']='';
		//$data_side['attribute_master_list']='';
		//$data_side['corporate_list']='';
		//$data_side['offer_list']='';
		$data_header['logout_link']='admin/login/logout';
		//$data_header['commentData']=' ';
		//$data_header['allComment_link']='';
		}
		$this->load->view($viewPartialPath.'layout/headertop');
		if($this->uri->segment(2)<>'login')
		{
	    $this->load->view($viewPartialPath.'layout/header',$data_header);
	    $this->load->view($viewPartialPath.'layout/sidemenu',$data_side);
		$this->load->view($viewPartialPath.'layout/subheader');
		}
		//$this->load->view($viewPartialPath.$viewPath,$viewData);
		$this->load->view($viewPath,$viewData);
		if($this->uri->segment(2)<>'login'){
		$this->load->view($viewPartialPath.'layout/footer');
		}
		$this->load->view($viewPartialPath.'layout/footerdown');
	
    }

    public function commonLayoutView2($viewPath,$viewData){
		$data_header=array();
		$data_footer=array();
		//$data_header['product_list']='product/list/';
		//$data_header['storelocator_link']='storelocator/';
		//$data_header['corporate_link']='aboutus/';
		//$data_header['media_link']='blog/';
		//$data_header['joinus_link']='joinus/';
		//$data_header['franchise_link']='franchise/';
		
		//$data_header['cat_list']=$this->my_model->getcatagories();
		//$data_header['sub_cat_list']=$this->my_model->getsubcatagories();
		$data_header['home_link']='home/';
		$data_header['product_list']='product/list/';
		$data_header['aboutus_link']='aboutus/';
		$data_header['blog_link']='blog/';
		$data_header['contact_link']='contact/';
		$data_header['cart_link']='cart/';
		$data_header['cat_list']=$this->commoncontroller_model->getcatagories();
		$data_header['sub_cat_list']=$this->commoncontroller_model->getsubcatagories();
		$data_header['offer_list']=$this->commoncontroller_model->offerTop();
		/////////////////////////////////////////////////////////////////
		//$data_footer['storelocator_link']='storelocator/';
		//$data_footer['newsletter_link']='newsletter/';
		$data_footer['content_management_link']='content/';		
		//$data_footer['comment_link']='comment/';
		$data_footer['get_content']=$this->commoncontroller_model->footer_link();
		/////////////////////////////////////////////////////////////////		
		//$this->load->view('layout/headertop',$data_header);		
		if($this->uri->segment(1)==''||$this->uri->segment(1)=='home')
		{
			$this->load->view('layout/headerhome',$data_header);	
		}
		else{
              $this->load->view('layout/headertop',$data_header);	
			//$this->load->view('layout/breadcrumb');
         
		    }
	    /////////////////////////////////////////////////////////////////
	    $this->load->view($viewPath,$viewData);
	    /////////////////////////////////////////////////////////////////
		$this->load->view('layout/footer',$data_footer);
	}
	
	public function logincheck(){
		$this->session->set_userdata('current_url',current_url());
		if(!$this->session->userdata('login_data')){
			redirect(base_url().'admin/login/index');	
		} 
	}
	
}