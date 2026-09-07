@extends('layouts.app')

@section('title', 'Novo Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    <form action="/alunos" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome"><br>

        <label>Curso:</label>
        <input type="text" name="curso"><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
<h1>Cadastrar Aluno</h1>
