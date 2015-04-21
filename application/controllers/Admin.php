<?php 
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		 $this->load->library('form_validation');
		}
	function index(){
		$this->load->view('admin/login');
		
		}
	function validar(){
		
		}
	function dashboard(){
		
		}
	}
?>