<?php
class Auth_model extends CI_Model {
    
    public function __construct()
        {
            parent::__construct();
            $this->load->model('Auth_model');
            // $this->load->logged_in();
        }
    public function signup_user()
    {      
        $password=$this->input->post('password');
        $cpass=$this->input->post('cpass');
        $data=array(
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>$password,
           );

                if($password!=$cpass){
                    $this->session->set_flashdata('error','Something went wrong, Try again!');
                    redirect('Auth/signup');
                        }
                            
                else{
                        $data=array(
                            'username'=>$this->input->post('username'),
                            'email'=>$this->input->post('email'),
                            'password'=>$password,
                                );
               $this->db->insert('signinfo',$data);
               $this->session->set_flashdata('success', 'Signup Successfully!');
               redirect('Auth/signup');
           }
    }

    
    
    public function signin_user()
    {      
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('signinfo');
        $find_user=$query->num_rows($query);

        if($find_user>0){
            $this->session->set_flashdata('success',' Sign-in successfully!!');
            redirect('Auth/user_dashboard');
            
        }
        else{
            $this->session->set_flashdata('error','Invalid Email or Password!!');
            redirect('Auth/signin');

        }
        }

    public function user_logout()
    {
       $newdata = array('username'  =>'',
                        'email' => '',
                        'password'=>'',
                        'cpass'=>'',                  
                        'logged_in' => FALSE,
               );

     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect('auth/signin','refresh');
    }

    
    
 

}

   
    
           
    