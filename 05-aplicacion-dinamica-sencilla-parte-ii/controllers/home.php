<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase Home
 *
 * Controlador para manejar todas las solicitudes relacionadas
 * con los articulos
 *
 * @author Eborio Linarez <contacto@todoprogramacion.com.ve>
 * @link   http://todoprogramacion.com.ve
 */
class Home extends CI_Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        
        // Cargar un modelo de manera basica
        $this->load->model('Articulos_model');

        // Cargar un modelo cambiando el nombre del objeto
        // $this->load->model('Articulos_model','art');
    }

    /**
     * Muestra la vista principal con el listado de articulos
     * 
     * @return view Vista principal
     */
    public function index()
    {
        // Se obtiene la lista de articulos
        $datos['articulos'] = $this->Articulos_model->lista_articulos();

        // Utilizacion del modelo a traves del nombre de objeto modificado
        // $datos['articulos'] = $this->art->lista_articulos();

        $datos['titulo'] = 'Título de mi sitio - Curso de CI';
        $this->load->view('index',$datos);
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */