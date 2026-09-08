<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;    

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        return view('alunos.create');
    }

public function store(AlunoRequest $request)
{
    Aluno::create($request->validated());
    return redirect('/alunos');
}
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

public function update(AlunoRequest $request, $id)
{
    $aluno = Aluno::findOrFail($id);
    $aluno->update($request->validated());
    return redirect('/alunos');
}

    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect('/alunos');
    }
}