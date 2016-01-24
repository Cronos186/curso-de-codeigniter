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
        $sql = 'DELETE FROM alumns WHERE id = ' . $id;
        $this->db->query($sql);
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
    * @param  string $id        ID
    * @param  string $dni       DNI
    * @param  string $name      Nombre
    * @param  string $lastname  Apellido
    * @param  string $genre     Genero
    * @param  string $address   Direccion
    * @return void
    */
	public function update($id, $dni, $name, $lastname, $genre, $address)
	{
        $sql = 'UPDATE alumns set dni = '.$this->db->escape($dni).', name = '.$this->db->escape($name).', lastname = '.$this->db->escape($lastname).', genre = '.$this->db->escape($genre).', address = '.$this->db->escape($address).' WHERE id = ' . $this->db->escape($id);
        $this->db->query($sql);
	}
}
