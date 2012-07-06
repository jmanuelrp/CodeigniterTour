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
					'type'=>'input',
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
}