<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    //for admin
    public function fetchAll(){

        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();

    }
    public function fetchActive(){

        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('is_active',1);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function fetchRecommend()
    {
        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('is_active',1);
        $this->db->where('is_recommend',1);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function fetchNotRecommend(){
        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('is_active','1');
        $this->db->where('is_recommend','0');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getDesc($id){

        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->where('is_active', 1);
        $this->db->where('id', $id);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query->result_array();

    }
    public function create($arr){
        if($arr['image_cover'] !=''){
            $data = array(
                'name'      => $arr['name'],
                'img_cover' => $arr['image_cover'],
                'is_active' => '1'
            );
        } else {
            $data = array(
                'name'      => $arr['name'],
                'is_active' => '1'
            );
        }

        $this->db->insert('tbl_type', $data);
        return $this->db->affected_rows();
    }
    public function update($arr)
    {
        if($arr['image_cover'] !=''){
            $data = array(
                'name'      => $arr['name'],
                'img_cover' => $arr['image_cover']
            );
        } else {
            $data = array(
                'name'      => $arr['name']
            );
        }

        $this->db->where('id', $arr['id']);
        $this->db->update('tbl_type', $data);
        return $this->db->affected_rows();
    }
    public function update_isactive($id,$st)
    {
        $data = array(
            'is_active' => $st
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_type', $data);
        return $this->db->affected_rows();
    }
    public function update_isrecommend($id, $st)
    {
        date_default_timezone_set("Asia/Bangkok");
        $cur_date = date("Y-m-d H:i:s");
        
        $data = array(
            'is_recommend'  => $st
        );

        $this->db->where('id', $id);
        $this->db->update('tbl_type', $data);
        return $this->db->affected_rows();
    }

}

?>