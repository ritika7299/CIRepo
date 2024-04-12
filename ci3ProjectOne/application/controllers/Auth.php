<?php
class Auth extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('auth_model');
            $this->load->helper('form');
            $this->load->library('form_validation','session');
            // $this->load->logged_in();
           

        }
        public function index()
        {
        //   $this->load->view('home_page');
            $this->load->view('welcomehome');
            
        
            }   
    
        public function signin()
        {
           $this->load->view('Auth/signin_view');
        }   

        public function signin_form()
        {
            if($this->input->post()){
                $this->form_validation->set_rules('email','Email','required|valid_email');
                $this->form_validation->set_rules('password','Password','required|valid_email');
               
                if($this->form_validation->run()== FALSE){
                // echo "error";
                echo validation_errors();
                }
                else{
                    echo "success";

                }
            }  
           $this->auth_model->signin_user();
        }

        public function signup()
        {
                       
            $this->load->view('Auth/signup_view');
                   
          }
        
        public function signup_form()
        {
          

            $this->auth_model->signup_user();
              
        }

        public function user_dashboard()
        {
            $this->load->view('Auth/header');
            $this->load->view('Auth/dashboard');
            $this->load->view('Auth/footer');
        } 
        
        public function logout()
        {
            $this->auth_model->user_logout();

        }

        

        public function user_details()
        {
            // $this->auth_model->user_logout();

            $this->load->view('Auth/header');
            $this->load->view('auth/profile_show');
            $this->load->view('Auth/footer');

        }

        public function edit_profile()
        {
            // $this->auth_model->user_logout();

            $this->load->view('Auth/header');
            $this->load->view('auth/edit_profile');
            $this->load->view('Auth/footer');

        }
        public function updated_profile()
        {
            // $this->auth_model->user_logout();

            $this->load->view('Auth/header');
            $this->load->view('Auth/update_profile');
            $this->load->view('Auth/footer');

        }

       
        
    }  





                    
