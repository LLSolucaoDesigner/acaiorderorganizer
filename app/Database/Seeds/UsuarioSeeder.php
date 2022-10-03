<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
	public function run()
	{
		$usuarioModel = new \App\Models\UsuarioModel;

		$usuario = [
			'nome' => 'Lucio Antonio de Souza',
			'email' => 'admin@admin.com',
			'cpf' => '697.588.570-29',
			'telefone' => '41 - 9999-9999',
		];

		$usuarioModel->protect(false)->insert($usuario);

		$usuario = [
			'nome' => 'Fulano de Tal',
			'email' => 'fulano@email.com',
			'cpf' => '984.386.620-72',
			'telefone' => '41 - 8888-9999',
		];

		$usuarioModel->protect(false)->insert($usuario);

		dd($usuarioModel->errors());
	}
}
