<?php
class Admin_model extends CI_Model {
    public function __construct()
        {
            parent::__construct();
            $this->load->model('Admin_model');
        }
        public function admin_login()
    {      
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('admininfo');
        $find_user=$query->num_rows($query);

        if($find_user>0){
            $this->session->set_flashdata('success','Login successfully!!');
            redirect('admin/admin_dashboard');
           
            
        }
        else{
            $this->session->set_flashdata('error','Invalid Email or Password, try again!');
            redirect('admin/index');

        }
        }
        
        public function admin_logout()
    {
       $newdata = array('email' => '',
                        'password'=>'',
                        'name'=>'',                  
                        'logged_in' => FALSE,
               );

     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect('admin/index','refresh');
}

    //     public function get_user_count() 
    //     {
    //     $query = $this->db->query('SELECT COUNT(*) as count FROM admininfo');
    //     return $query->row()->count;
    // }

    }
    