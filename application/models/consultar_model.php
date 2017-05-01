<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultar_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function consultar($data) {
		$this->db->insert('cursos',
						array('nombreCurso'=>$data['nombre']),
						array('videosCurso'=>$data['videos']));
	}

}

?>