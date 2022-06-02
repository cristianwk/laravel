<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = ['Product 01', 'Product 02', 'Product03'];
        return $products;
    }

    public function show($id){
        return "Exibindo o produto de id: {$id}";
    }

    public function create(){
        return "Exibindo o form de cadastro de um novo produto";
    }

    public function edit($id){
        return "Form de edição do produto de id: {$id}";
    }

    public function salvar(){
        return "Salvar produto";
    }

    public function update($id){
        return "Update: {$id}";
    }

    public function deletar($id){
        return "Deletar: {$id}";
    }

}
