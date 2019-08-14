<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class commoncontroller_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    public function getcatagories(){
	    $this->db->select('*');
	    $this->db->where(array('parent_id'=>'0'));
	    $query=$this->db->get('catagory');
	    return $query->result();
	}
	public function getsubcatagories(){
	    $this->db->select('*');
	    $this->db->where(array('parent_id >'=>'0'));
	    $query=$this->db->get('catagory');
	    return $query->result();
	}
	public function footer_link(){
		$query=$this->db->query("SELECT * FROM  `content` WHERE `status`='y' AND page='content' ORDER BY sequence_no  ASC");
		return $query->result();
	}
	public function offerTop(){
		$sql="SELECT * FROM  `offer_promotion`  WHERE place='headertop' AND status='y'";
		$query=$this->db->query($sql);
	    return $query->result();
	}
}