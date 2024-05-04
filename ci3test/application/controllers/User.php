<?php
class User extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
        }
        public function home()
        {
            
            $this->load->view('user/home');
           
        } 
        
        public function index()
        {
            $data = array(); // Initialize $data as an array
            $data['users'] = $this->user_model->getusers($data);
            $this->load->view('user/index', $data);
           
        } 
        public function about()
        {
            
            $this->load->view('user/about');
           
        } 
        


        public function add()
        {
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $username=$this->input->post('username');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');
                $address=$this->input->post('address');
                $data=array(
                    'username'=>$username,
                    'email'=>$email,
                    'mobile'=>$mobile,
                    'address'=>$address,
                );
                $status=$this->user_model->insertUser($data);
                if($status=='true')
                {
                    $this->session->set_flashdata('success','successfully Added');
                    redirect((base_url('user/add')));
                    
                }
                else
                {
                    $this->session->set_flashdata('error','Not Added');
                    $this->load->view('user/add_user');
                }
            }
                else
                {
                    $this->load->view('user/add_user');

                }

        }
            

        public function edit($id)
        {
            // $data=array();
            $data['user'] = $this->user_model->getUser($id); 
            $data['id']=$id;
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $username=$this->input->post('username');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');
                $address=$this->input->post('address');
                $data=array(
                    'username'=>$username,
                    'email'=>$email,
                    'mobile'=>$mobile,
                    'address'=>$address,
                );
                $status=$this->user_model->updateUser($data, $id);
                if($status=='true')
                {
                    $this->session->set_flashdata('success','successfully Updated');
                    redirect((base_url('user/edit/'.$id)));
                    
                }
                else
                {
                    $this->session->set_flashdata('error','Not Added');
                    $this->load->view('user/edit_user');
                }
            }
                 $this->load->view('user/edit_user',$data);
                   
            }
        
            public function delete($id)
                {
                    if(is_numeric($id))
                    {
                        $status=$this->user_model->deleteUser($id);
                         if($status=='true')
                            {
                                $this->session->set_flashdata('deleted','successfully deleted');
                                redirect((base_url('user/index/')));
                            }
                        else
                            {
                                $this->session->set_flashdata('error','Not Added');
                                $this->load->view('user/indexs');
                            }
                    }
                }

                public function login()
                {
                    $this->load->view('user/login');
                }

                public function signup()
                {
                    $this->load->view('user/sighup');
                }
        
    }      
          
   
