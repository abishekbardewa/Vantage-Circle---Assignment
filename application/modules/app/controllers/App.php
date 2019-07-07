<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class App extends MX_Controller
{
    function index()
    {
        if ($this->session->userdata('username'))
        {
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('body');
            $this->load->view('footer');
        }
        else redirect('login');
    }
    function login_layout($data)
    {
        $this->load->view('header',$data);
        $this->load->view('body');
        $this->load->view('footer');
    }
    
    function app_main()
    {
        if ($this->session->userdata('username'))
        {
             //app
             $this->load->view('main/main.js');
             //controllers
             $this->load->view('login/ctrl_login.js');
             $this->load->view('dashboard/ctrl_dashboard.js');
             $this->load->view('imageupload/ctrl_imageupload.js');
        }
        else redirect('login');
    }
    
}