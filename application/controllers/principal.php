<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('consultar_model');
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('headers');
		$this->load->view('menu');
		$this->load->view('principal');
		$this->load->view('article_up');
		$this->load->view('article_down');
		$this->load->view('form_aside');
		$this->load->view('footer');
		//$this->load->view('formaside');
		$this->load->view('scripts');
	}

	function consultarInformacion() {

		$data = array(	'inmueble'	=> $this->input->post('cmboInmueble'),
						'operacion'	=> $this->input->post('cmboOperacion'),
						'estado'	=> $this->input->post('cmboEstado'),
						'ciudad'	=> $this->input->post('cmboCiudad'),
						'colonia'	=> $this->input->post('cmboColonia'),
						'zona'		=> $this->input->post('cmboZona'),
						'precio'	=> $this->input->post('cmboPrecio'),
						'keyword'	=> $this->input->post('inpKeyword')
		);

		//$this->consultar_model->consultar($data);

	}

}
