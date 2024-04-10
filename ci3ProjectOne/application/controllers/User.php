<?php
class User extends CI_Controller {

        
        public function index()
        {
           echo "hello";
        }   
        public function home()
        {
            $this->load->view('home/home_view');
        }     
        public function login()
        {
            $this->load->view('user/login_view');
        }         
         
        public function signup()
        {
            // $this->load->view('user/signup_view');
        }        
                    
    }      
          
   
