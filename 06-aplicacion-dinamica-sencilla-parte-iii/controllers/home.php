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

	// Muestra un articulo por URL
	function detalle_articulo($url_articulo) {
		$url_limpio = $this->security->xss_clean($url_articulo);
		$datos['detalle'] = $this->Articulos_model->detalle_articulo($url_limpio);
		$datos['titulo'] = $datos['detalle']->url_articulo;
		$this->load->view('detalle',$datos);
	}

	// Muestra un articulo por nombre
	// function detalle_articulo($nombre_articulo) {
	// 	$nombre_limpio = str_replace('-', ' ', $nombre_articulo);
	// 	$datos['detalle'] = $this->Articulos_model->detalle_articulo($nombre_limpio);
	// 	$datos['titulo'] = $datos['detalle']->nombre_articulo;
	// 	$this->load->view('detalle',$datos);
	// }

	// Muestra los detalles de un articulo por ID
	// function detalle_articulo($id_articulo) {
	// 	$id_limpio = $this->security->xss_clean($id_articulo);
	// 	$datos['detalle'] = $this->Articulos_model->detalle_articulo($id_limpio);
	// 	$datos['titulo'] = $datos['detalle']->nombre_articulo;
	// 	$this->load->view('detalle',$datos);
	// }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */