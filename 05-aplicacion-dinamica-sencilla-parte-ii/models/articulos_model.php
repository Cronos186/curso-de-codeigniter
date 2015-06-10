<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase Articulos_model
 *
 * Modelo para interactuar con los datos de los articulos
 *
 * @author Eborio Linarez <contacto@todoprogramacion.com.ve>
 * @link   http://todoprogramacion.com.ve
 */
class Articulos_model extends CI_Model
{
	/**
     * Obtiene el listado de articulos
     * 
     * @return object Datos de los articulos
     */
	public function lista_articulos()
    {
		$this->db->order_by('id_articulo', 'desc');
		$consulta = $this->db->get('articulos');
		return $consulta->result();

		// Retornar los datos en forma de arreglo
		// return $consulta->result_array();
	}
}

/* End of file articulos_model.php */
/* Location: ./application/models/articulos_model.php */