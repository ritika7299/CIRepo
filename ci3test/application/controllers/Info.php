<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	
	public function create()
	{
		$this->load->view('create');
        // echo "created";
	}
	public function edit()
	{
		$this->load->view('edit');
        // echo "created";
	}
	public function delete()
	{
		$this->load->view('delete');
        // echo "created";
	}

	}
