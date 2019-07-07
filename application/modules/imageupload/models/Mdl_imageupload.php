<?php

if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Mdl_imageupload extends CI_Model
{

    function add_images($data)
    {
//         echo "askjfsdlk";die();
        $insert = $this->db->insert('images', $data);
        return $this->db->affected_rows($insert);
    }
    
    function view_images($where=null,$select,$start,$limit)
    {
        $this->db->select($select);
        if($where)
            $this->db->where($where);
        $this->db->order_by('id',"asc");
        return $this->db->get('images',$limit,$start);
    }
}