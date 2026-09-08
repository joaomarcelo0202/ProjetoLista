@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h1>Editar Aluno</h1>

    <form action="/alunos/{{ $aluno->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $aluno->nome }}"><br>

        <label>Curso:</label>
        <input type="text" name="curso" value="{{ $aluno->curso }}"><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection