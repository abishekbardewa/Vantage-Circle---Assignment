<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{
    function index()
    {
        $data= array(
            "title"=>"Admin Dashboard",
            "module"=>"dashboard",
            "view_file"=>"dashboard"
        );
        echo Modules::run('template/layout1', $data);
    }
    function admin()
    {
        $this->load->view('view');
    }
}