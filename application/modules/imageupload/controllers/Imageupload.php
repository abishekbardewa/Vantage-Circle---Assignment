<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Imageupload extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_imageupload');
    }

    function index()
    {
        $data['heading'] = "Image Upload";
        $data['title'] = "Image Upload";
        $this->load->view('view', $data);
    }

    function save_image()
    {
        // print_r($_FILES);die();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title", "Title", "required|trim");
        
        if ($this->form_validation->run() == TRUE) {
            $data['title'] = $_POST['title'];
            if (! empty($_FILES['image']['name'])) {
                // print_r($_FILES);die();
                $data['image'] = $this->image_upload($data['title']);
            }
            // print_r($_FILES);die();
            echo $this->mdl_imageupload->add_images($data);
        } else
            echo validation_errors();
    }

    function image_upload($name)
    {
        // print_r($_FILES);die();
        $folder = "uploads";
        // upload coder starts here
        $config['upload_path'] = './assets/website/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['min_width'] = 100;
        
        $rand_number = mt_rand(0, 805);
        $timestamp = time();
        $name = str_replace(" ", "_", $name);
        $config['file_name'] = $name . "_" . $rand_number . $timestamp;
        
        $config['overwrite'] = false;
        $config['remove_spaces'] = true;
        
        $this->load->library('upload', $config);
        if (! $this->upload->do_upload('image')) {
            echo $this->upload->display_errors();
            die();
        } else {
            $image = $this->upload->data();
            // print_r($image);die();
            if ($this->input->post('width')) {
                $config['width'] = $this->input->post('width');
            } else {
                if ($image['image_width'] > 720)
                    $config['width'] = 720;
            }
            // image manipulation resizing 1
            $config['source_image'] = './assets/website/temp/' . $image['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['new_image'] = "./assets/website/$folder/";
            
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            
            if (! $this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
                die();
            }
            
            $this->image_lib->clear();
            // image manipulation resizing 2
            $config['source_image'] = './assets/website/temp/' . $image['file_name'];
            $config['file_name'] = $name . "_" . $rand_number . $timestamp;
            $config['maintain_ratio'] = TRUE;
            if ($image['image_width'] > 100) {
                $config['width'] = 100;
            }
            $config['overwrite'] = FALSE;
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            if (! $this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
                die();
            } else {
                unlink($config['source_image']);
                return $image['file_name'];
            }
        }
    }
    
    function view_data()
    {
        $where=null;
        if (isset($_GET['id']))
            $where['id']=$_GET['id'];
        if(isset($_GET['start']))
            $start=$_GET['start'];
        if(isset($_GET['limit']))
            $limit=$_GET['limit'];
        if (isset($_GET['data']))
            $select=$_GET['data'];
        else $select="*";
         
        $return=$this->mdl_imageupload->view_images($where,$select,$start,$limit);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
    
}