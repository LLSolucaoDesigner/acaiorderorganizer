<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testes extends BaseController
{
	public function index()
	{

		$data = [
			'titulo' => 'Curso de como fazer um sistema de entrega de comida com codeigniter 4',
			'subtitulo' => 'Muito massa conhecer a nova versão do Codeigniter 4',
		];

		return view('Testes/index', $data);
	}

	public function novo() 
	{
		echo 'Esse é mais um método do controller Testes';
	}
}
