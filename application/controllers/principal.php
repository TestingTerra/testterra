<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('headers');
		$this->load->view('menu');
		$this->load->view('formaside');
		$this->load->view('principal');
		$this->load->view('scripts');
	}

}
