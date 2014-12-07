<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Articulos_model');

		// Cargar un modelo cambiando el nombre del objeto
		// $this->load->model('Articulos_model','art');
	}

	// Muestra la vista principal con el listado de articulos
	function index() {
		$datos['articulos'] = $this->Articulos_model->lista_articulos();

		// Utilizacion del modelo a traves del nombre de objeto modificado
		// $datos['articulos'] = $this->art->lista_articulos();

		$datos['titulo'] = 'Título de mi sitio - Curso de CI';
		$this->load->view('index',$datos);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */