<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login/login_index');
	}
    public function about()
    {
        $this->load->view('login/login_about');
    }
    public function contact_info()
    { 
        echo "<h1>This is contact us page</h1>";
    }
    public function product($name=" ")
    {
        echo "<h3>Product name: </h3>".$name;
    }
    public function service($id=" ",$name=" ")
    {
        echo "<h3>This is our service page</h3><p>ID: " .$id . "AND Service Name: ".$name ;
    }
} 
