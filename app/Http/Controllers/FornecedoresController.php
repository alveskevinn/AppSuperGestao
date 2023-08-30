<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [0 => [
            'nome' => 'Fornecedor 1',
            'cnpj' => '000.000.000/0000-00',
            'status' => 'ativo',
        ], 1 => [
            'nome' => 'Fornecedor 2',
            'cnpj' => '000.000.000/0000-00',
            'status' => 'inativo',
            'ddd' => '81'
        ],
        2 => [
            'nome' => 'Fornecedor 3',
            'cnpj' => '000.000.000/0000-00',
            'status' => 'ativo',
            'ddd' => '12'
        ],
        3 => [
            'nome' => 'Fornecedor 4',
            'cnpj' => '000.000.000/0000-00',
            'status' => 'inativo',
            'ddd' => '13'
        ],
        4 => [
            'nome' => 'Fornecedor 5',
            'cnpj' => '000.000.000/0000-00',
            'status' => 'ativo',
            'ddd' => '19'
        ],
    ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
