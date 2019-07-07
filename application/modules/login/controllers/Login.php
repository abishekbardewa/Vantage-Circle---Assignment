<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_login');
    }

    function index()
    {
        $data['heading'] = "Login";
        $data['title'] = "Login Section ";
        $this->load->view('login', $data);
    }

    function check_valid_session()
    {
        if ($this->session->userdata('username'))
            echo "1";
        else
            echo "0";
    }

    function check()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        
        if ($this->form_validation->run() == true) {
            if ($this->mdl_login->validate() == true) {
                redirect('app');
            } else {
                $data['msg'] = "Unauthorise User !!! ";
                $data['heading'] = "Login";
                $data['title'] = "Login Section ";
                $this->load->view('login', $data);
            }
        } else {
            $this->index();
        }
    }

    function change_password()
    {
        $this->load->view('change_password');
    }

    function change_password_submit()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('currentpass', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newpass', 'New Password', 'required|trim|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('cmpassword', 'Confirm new Password', 'required|trim|matches[newpass]');
        
        if ($this->form_validation->run() == True) {
            if ($this->mdl_login->change_pwd() == TRUE) {
                echo "<div class='alert alert-success'>Password Changed Sucessfull</div>";
                die();
            } else {
                echo "<div class='alert alert-danger'>Unauthorized User</div>";
            }
        } else {
            echo "<div class='alert alert-warning'>" . validation_errors() . "</div>";
        }
    }

    function register()
    {
        // print_r($_POST);die();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("username", "Username", "required|trim");
        $this->form_validation->set_rules("password", "Password", "required|trim");
        $this->form_validation->set_rules("email", "Email", "required|trim");
        
        if ($this->form_validation->run() == TRUE) {
            // print_r($_POST);die();
            $data['name'] = $_POST['name'];
            $data['username'] = $_POST['username'];
            $data['password'] = md5($_POST['password']);
            $data['email'] = $_POST['email'];
            
            $this->load->model('mdl_login');
            $insert_qry = $this->mdl_login->add_user($data);
            if ($insert_qry == TRUE) {
                echo "<div class='alert alert-success'>Registration Sucessfull</div>";
            } else {
                echo "<div class='alert alert-warning'>Registration Error</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    function logout()
    {
        $this->session->set_userdata('');
        $this->session->sess_destroy();
        redirect('login');
    }
}

