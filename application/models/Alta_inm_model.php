<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
  class Alta_inm_model extends CI_MODEL
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function alta_Inm($datosInm)
    {
      $this->db->insert('inmuebles',
      array('IdInmueble' => '',
      'IdImagenPpal' => $datosInm['imgPrin'],
      'titulo' => $datosInm['titulo'],
      'subtitulo' => $datosInm['subtitulo'],
      'clave' => $datosInm['clave'],
      'areaConstruccion' => $datosInm['areaConst'],
      'areaTerreno' => $datosInm['areaTerr'],
      'recamaras' => $datosInm['recam'],
      'banos' => $datosInm['banos'],
      'mediosBanos' => $datosInm['medBanos'],
      'direccion' => $datosInm['direccion'],
      'tipo' => $datosInm['tipo'],
      'operacion' => $datosInm['oper'],
      'estado' => $datosInm['estado'],
      'ciudad' => $datosInm['mun'],
      'colonia' => $datosInm['col'],
      'zona' => $datosInm['zona'],
      'precio' => $datosInm['precio'],
    ));
    }
  }

 ?>
