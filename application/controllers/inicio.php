<?php

/**
* 
*/
class Inicio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	function index()
	{
		echo "Hola";
	}

	function testurl()
	{
		$data['titulo'] = 'Mi titulo';
		$data['dato'] = urldecode($this->uri->segment(4));
		$this->load->view('pagina',$data);
	}
}