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
        $this->authorize('create', Aluno::class);
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $this->authorize('create', Aluno::class);
        Aluno::create($request->validated());
        return redirect('/alunos');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $this->authorize('update', $aluno);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $this->authorize('update', $aluno);
        $aluno->update($request->validated());
        return redirect('/alunos');
    }

    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $this->authorize('delete', $aluno);
        Aluno::destroy($id);
        return redirect('/alunos');
    }
}