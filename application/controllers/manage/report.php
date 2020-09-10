<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
        parent::__construct();
        echo "Construct"."</br>";
    }

	public function index()
	{
		echo "Report Index";
    }
    
    public function hello()
	{
		echo "</br>"."Hello World";
    }
    
    public function showname($name="john",$lastname="wick"){
        echo "My name is ".$name." ".$lastname;
        $this->hello();
    }
    public function showview($name="john",$lastname="wick"){
        echo "My name is ".$name." ".$lastname;
        $this->load->view("hello_view");
        $this->load->view("hello_view");
        $this->load->view("hello_view");
    }

    public function showuser(){
        $data['name'] = "Mario";
        $data['last'] = "Maoloer";
        $data['age'] = 18;
        $this->load->view("user_page",$data);
    }

    public function getuser($p1=null,$p2=null,$p3=null){
        $data['name'] = $p1;
        $data['last'] = $p2;
        $data['age'] = $p3;
        $this->load->view("user_page",$data);
    }

    public function showbooks(){
        $data['books'] = array("Java","Kotlin","PHP");
        $this->load->view("books_page",$data);
    }
}