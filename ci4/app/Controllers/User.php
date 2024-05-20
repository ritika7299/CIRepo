<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        echo view('info');      //Information about user
    }

    public function add()
    {
        echo view('adduser');   // Add new user

    }
    public function edit()
    {
        echo view('adduser');   // Update user

    }

    public function delete()
    {
        echo view('deleteuser');    //Delete user

    }
}