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
		$this->formulario();
	}

	function testurl()
	{
		$data['titulo'] = 'Mi titulo';
		$data['dato'] = urldecode($this->uri->segment(4));
		print_r($data);
	}

	function formulario()
	{
		$this->load->helper('form');
		$data['titulo'] = 'Formulario';
		$data['dato'] = 'dato';
		$data['main_menu'] = array(
				array('title'=>'Inicio','link'=>base_url(),'attrs'=>''),
				array('title'=>'Usuarios','link'=>'Usuarios','attrs'=>'')
			);
		$data['formulario'] = array(
			'title'=>'Links',
			'action'=>'receptor',
			'attrs'=>'class="form-horizontal" id="formulario"',
			'fields'=>array(
				array(     
					'type'=>'input',
					'name'=>'Titulo',
					'attrs'=>array('name'=>'titulo','id'=>'titulo','class'=>'input-large')
				),
				array(
					'type'=>'date',
					'name'=>'Enlace',
					'attrs'=>array('name'=>'enlace','id'=>'enlace','class'=>'input-large')
				)
			),
			'buttons'=>array(
				array('type'=>'button','class'=>'btn btn-large btn-success','content'=>'Enviar','id'=>'send-info')
			)
		);

		
		$this->load->view('pagina',$data);
	}

	function login()
	{
		$this->load->helper('form');
		$data['titulo']='Login';
		$data['login'] = array(
			'title' => 'Login',
			'action' => 'login/validar',
			'atr' => 'class="form-horizontal"',
			'fields' => array(
				array(
					'type'=>'input',
					'name'=>'Usuario',
					'atr'=>array('name'=>'usuario', 'id'=>'usuario',  'class'=>'input-large')
				),
				array(
					'type'=>'password',
					'name'=>'Contraseña',
					'atr'=>array('type'=>'password','name'=>'pass', 'id'=>'pass', 'class'=>'input-large') 
				)
			),
			'boton'=>array(
				array(
					'type'=>'boton',
					'atr'=>array('type'=>'submit', 'content'=>'Acceder', 'class'=>'btn btn-primary')
				),
				array(
					'type'=>'link',
					'content'=>'Registrar',
					'enlace'=>'login/registrar',
					'atr'=>'class="btn btn-inverse"'
				)
			)
		);
		$this->load->view('login',$data);
	}
}