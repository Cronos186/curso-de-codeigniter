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
        $sql = 'SELECT * FROM alumns WHERE id = '. $id;
        $query = $this->db->query($sql);
        return $query->row();
        // return $query->row_array();
	}

	/**
    * Obtiene los datos de todos los alumnos
    *
    * @return object
    */
	public function getAlumns()
	{
        $sql = 'SELECT * FROM alumns';
        $query = $this->db->query($sql);
        return $query->result();
        // return $query->result_array();
	}

	/**
    * Almacena los datos del alumno
    *
    * @param  string $dni       DNI
    * @param  string $name      Nombre
    * @param  string $lastname  Apellido
    * @param  string $genre     Genero
    * @param  string $address   Direccion
    * @return void
    */
	public function save($dni, $name, $lastname, $genre, $address)
	{
        $sql = 'INSERT INTO alumns VALUES(null, '.$this->db->escape($dni).', '.$this->db->escape($name).', '.$this->db->escape($lastname).', '.$this->db->escape($genre).', '.$this->db->escape($address).')';
        $this->db->query($sql);
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
