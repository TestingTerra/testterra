<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Alta_inm_model');
		$this->load->library('form_validation');
		// $this->load->model('consultar_model');
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
		// $this->consultar_model->consultar($data);
	}//fin de la función consultarInformacion
	public function altaInmueble()
	{
		//vamos a guardar los datos de los input en variables para el manejo en la base de datos
		$imgPrin = $this->input->post('imgPrin');
		$titulo = $this->input->post('titulo');
	  $subtitulo = $this->input->post('subtitulo');
	  $clave = $this->input->post('clave');
	  $areaConst = $this->input->post('areaConst');
	  $areaTerr = $this->input->post('areaTerr');
	  $recam = $this->input->post('recam');
	  $banos = $this->input->post('banos');
	  $medBanos = $this->input->post('medBanos');
	  $direccion = $this->input->post('direccion');
	  $tipo = $this->input->post('tipo');
	  $oper = $this->input->post('oper');
	  $estado = $this->input->post('estado');
	  $mun = $this->input->post('mun');
	  $col = $this->input->post('col');
	  $zona = $this->input->post('zona');
	  $precio = $this->input->post('precio');
		$config['upload_path'] = './assets/imagenesInm/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 2000;
    $config['max_width'] = 1024;
    $config['max_height'] = 768;
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');
		$this->load->library('upload', $config);
		if ($this->form_validation->run('altaInm')===FALSE) {
			$this->load->view('head');
			$this->load->view('headers');
			$this->load->view('menu');
			$this->load->view('admin/formAltaInm');
			$this->load->view('footer');
			$this->load->view('scripts');
		}else{
			if ( ! $this->upload->do_upload('imgPrin'))
			{
				// insertar una vista si pasa un error.
			}else
			{
				$dataImg = $this->upload->data();
			}
			// Aquí vamos a guardar los datos en un arreglo para enviarlas a la vista o usarlas en la db.
			$datosInm = array(
				'imgPrin' =>base_url('assets/imagenesInm/').$dataImg['file_name'],
				'titulo' =>$titulo,
				'subtitulo' =>$subtitulo,
				'clave' =>$clave,
				'areaConst' =>$areaConst,
				'areaTerr' =>$areaTerr,
				'recam' =>$recam,
				'banos' =>$banos,
				'medBanos' =>$medBanos,
				'direccion' =>$direccion,
				'tipo' =>$tipo,
				'oper' =>$oper,
				'estado' =>$estado,
				'mun' =>$mun,
				'col' =>$col,
				'zona' =>$zona,
				'precio' =>$precio
			);
			$this->Alta_inm_model->alta_Inm($datosInm);
			$this->load->view('admin/datos_Form_Inm',$datosInm);
		}//fin del else

	}//fin de la función altaInmueble
	public function muniDb()
	{
		if (isset($_POST['idEstado'])) {
			$idEstado = $_POST['idEstado'];
			$consultaCadena = "SELECT mun.id AS idMun, mun.nombre AS nomMun, mun.estado_id AS idEdoM, edo.id AS idEdo, edo.nombre AS edoNom FROM municipios AS mun INNER JOIN estados AS edo ON mun.estado_id = edo.id WHERE edo.nombre = '$idEstado';";
			$consulta = $this->db->query($consultaCadena);
			$resultado = $consulta->result_array();
			$numFilas = $consulta->result_id->num_rows;
			$selOptMun = "<option value = '' selected>Selecciona un municipio</option>";
			$datos = array();
			if ($numFilas > 0) {
				$datos['exito'] = TRUE;
				foreach ($resultado as $res) {
					$selOptMun.="<option value = '".$res['nomMun']."'>".$res['nomMun']."</option>";
		    }
				$datos['datos'] = $selOptMun;
				echo json_encode($datos,JSON_UNESCAPED_UNICODE);
			}else{
				$datos['exito'] = FALSE;
				$datos['datos'] = "Paso un error";
				// Aquí debemos hacer algo si hay un error
			}//fin del else
		}//fin del if
	}// fin de la función muniDb
	public function vistaFormInm()
	{
		$this->load->view('head');
		$this->load->view('headers');
		$this->load->view('menu');
		$this->load->view('admin/formAltaInm');
		$this->load->view('footer');
		$this->load->view('scripts');
	}
}//fin de la clase
