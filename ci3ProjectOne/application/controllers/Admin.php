<?php
class Admin extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->helper('form');
            $this->load->library('form_validation','session');
           

        }
   
        public function index()
        {
            // $this->load->view('admin/header'); 
            // $this->load->view('admin/home');
            // $this->load->view('admin/footer');
           
            
            $this->load->view('admin/login');
            

        }
        public function admin_dashboard()
        {
            $this->load->view('admin/header'); 
            $this->load->view('admin/home');
            $this->load->view('admin/footer');
        }
        
        

        public function adminlogin_form(){
            $this->Admin_model->admin_login();
        }
        
        public function logout()
        {
            $this->Admin_model->admin_logout();

        }

        public function category()
        {
            $this->load->view('admin/header'); 
            $this->load->view('admin/category');
            $this->load->view('admin/footer'); 

        }

        public function studentclasses()
        {
            $this->load->view('admin/header'); 
            $this->load->view('admin/stud_class');
            $this->load->view('admin/footer'); 

        }
          


        }
      
        

    
    