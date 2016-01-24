<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Clase Alumns
 *
 *  Esta clase permite manejar todas las solicitudes referentes a los
 *  alumnos
 *
 *  @package application\controllers
 *  @author  Eborio Linarez
 */
class Alumns extends CI_Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alumns_model');
    }

    /**
    * Muestra el dashboard de alumnos el cual posee la lista
    * de todos los que se encuentran registrados en la
    * base de datos
    *
    * @return view
    */
    public function index()
    {
        $data['alumns']  = $this->Alumns_model->getAlumns();
        $data['content'] = 'alumns/dashboard';
    	$this->load->view('templates/front', $data);
    }

    /**
    * Muestra la vista con el formulario para ingresar los datos
    * del alumno y almacenarlos en la base de datos
    *
    * @return view
    */
    public function create()
    {
        $data['content'] = 'alumns/create';
        $this->load->view('templates/front', $data);
    }

    /**
    * Elimina los datos de un alumno
    *
    * @param  int $id ID del alumno
    * @return redirect
    */
    public function delete($id)
    {
        $this->Alumns_model->delete($id);
        redirect('alumns');
    }

    /**
    * Muestra la vista para modificar los datos del alumno
    *
    * @param  int $id ID del alumno
    * @return view
    */
    public function edit($id)
    {
        $data['alumn']   = $this->Alumns_model->getAlumn($id);
        $data['content'] = 'alumns/edit';
        $this->load->view('templates/front', $data);
    }

    /**
    * Almacena los datos del alumno
    *
    * @return redirect
    */
    public function save()
    {
        $dni        = $this->input->post('dni');
        $name       = $this->input->post('name');
        $lastname   = $this->input->post('lastname');
        $genre      = $this->input->post('genre');
        $address    = $this->input->post('address');

        $data = [
            'dni'       => $dni,
            'name'      => $name,
            'lastname'  => $lastname,
            'genre'     => $genre,
            'address'   => $address
        ];

        $this->Alumns_model->save($data);
        redirect('alumns');
    }

    /**
    * Actualiza los datos del alumno
    *
    * @return redirect
    */
    public function update()
    {
        $id         = $this->input->post('id');
        $dni        = $this->input->post('dni');
        $name       = $this->input->post('name');
        $lastname   = $this->input->post('lastname');
        $genre      = $this->input->post('genre');
        $address    = $this->input->post('address');

        $this->Alumns_model->update($id, $dni, $name, $lastname, $genre, $address);
        redirect('alumns');
    }
}
