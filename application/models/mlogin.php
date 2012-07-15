<?php 

/**
* @Author JManuel
*/
class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function validar($usuario,$clave)
	{
		$this->db->where('nickname',$usuario);
		$this->db->where('clave',$clave);
		$usuario = $this->db->get('usuario');
		return ($usuario->num_rows==1);
	}
}

 ?>