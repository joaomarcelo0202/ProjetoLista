<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   

class AlunoController extends Controller
{
    //7 metodos do CRUD

    public function index()
    {
        return "return do metodo index: Listar todos os registros";
    }

    public function show()
    {
        return "return do metodo index: Listar detalhes de apenas um registro";
    }

    public function create()
    {
        return "return do metodo create: Adicionar novos dados";
    }

    public function store(){
        return"return do metodo store: Dados salvos";
    }

    public function edit()
    {
        return "return do metodo edit: Formulário para editar.";
    }

    public function update()
    {
        return "return do metodo update: registro atualizados e salvos.";
    }

    public function destroy()
    {
        return "return do metodo destroy: registro removido.";
    }

}
