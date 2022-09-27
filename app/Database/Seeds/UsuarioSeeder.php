<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
	public function run()
	{
		$usuario_Model = new \App\Models\UsuarioModel;

		$usuario = [
			'nome' => 'Lucio Antonio de Souza',
			'email'=> 'admin@admin.com',
			'telefone' => '41 - 9999-9999',
		];

		$usuario_Model->protect(false)->insert($usuario);

		$usuario = [
			'nome' => 'Fulano de Tal',
			'email'=> 'fulano@email.com',
			'telefone' => '41 - 8888-9999',
		];

		$usuario_Model->protect(false)->insert($usuario);

		dd($usuario_Model->errors());
	}
}
