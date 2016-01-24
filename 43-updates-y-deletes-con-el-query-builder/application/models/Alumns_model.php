<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Clase Alumns_model
 *
 *  Esta clase permite interactuar con los datos de los alumnos
 *
 *  @package application\models
 *  @author  Eborio Linarez
 */
class Alumns_model extends CI_Model
{
	/**
    * Elimina los datos de un alumno
    *
    * @param  int  $id  ID del alumno
    * @return void
    */
	public function delete($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('alumns');
	}

	/**
    * Obtiene los datos de un alumno
    *
    * @param  int $id ID del alumno
    * @return object
    */
	public function getAlumn($id)
	{
        $this->db->where('id', $id);
        $query = $this->db->get('alumns');
        return $query->row();
	}

	/**
    * Obtiene los datos de todos los alumnos
    *
    * @return object
    */
	public function getAlumns()
	{
        $query = $this->db->get('alumns');
        return $query->result();
	}

	/**
    * Almacena los datos del alumno
    *
    * @param  array $data Datos del alumno
    * @return void
    */
	public function save($data)
	{
        $this->db->insert('alumns', $data);
	}

	/**
    * Actualiza los datos del alumno
    *
    * @param  array $data Datos del alumno
    * @return void
    */
	public function update($id, $data)
	{
        $this->db->where('id', $id);
        $this->db->update('alumns', $data);
	}
}
