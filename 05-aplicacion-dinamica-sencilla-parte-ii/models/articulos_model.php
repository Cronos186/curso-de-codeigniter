<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_model extends CI_Model {

	// Genera el listado de articulos
	function lista_articulos() {
		$this->db->order_by('id_articulo', 'desc');
		$consulta = $this->db->get('articulos');
		return $consulta->result();

		// Retornar los datos en forma de arreglo
		// return $consulta->result_array();
	}
}

/* End of file articulos_model.php */
/* Location: ./application/models/articulos_model.php */