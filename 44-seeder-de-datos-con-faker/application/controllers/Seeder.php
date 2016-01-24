<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller
{
    private $faker;

    public function __construct()
    {
        parent::__construct();

        if (!$this->input->is_cli_request()) {
            exit('No se puede acceder desde el navegador');
        }

        if (ENVIRONMENT !== 'development') {
            exit('Solo válido para entornos de desarrollo');
        }

        $this->faker = Faker\Factory::create('es_VE');
    }

    public function alumns()
    {
        echo 'Seeding alums table' . PHP_EOL;

        $this->db->truncate('alumns');

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'dni' => $this->faker->randomNumber(8),
                'name' => $this->faker->firstName,
                'lastname' => $this->faker->lastName,
                'genre' => $this->faker->title(),
                'address' => $this->faker->streetAddress
            ];
            $this->db->insert('alumns', $data);
            $id = $this->db->insert_id();

            echo 'Alumns ' . $id . PHP_EOL;
        }

        echo 'Seeding alumns table complete';
    }

}
