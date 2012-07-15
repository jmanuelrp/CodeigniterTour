<?php 

/**
* @Author JManuel
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->helper('input');
	}

	function registrar()
	{
		print_r("Hola");
	}

	function validar()
	{
		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('pass');
		$this->load->model('mlogin');
		if (! $this->mlogin->validar($usuario,$clave)) {
			printf('incorrecto %s',$usuario);
			return;
		}
		printf('bienvenido %s',$usuario);
	}
}

 ?>