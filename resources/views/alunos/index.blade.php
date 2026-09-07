@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
    <h1>Alunos</h1>

    @if(count($alunos) > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>
                    <a href="/alunos/{{ $aluno->id }}">{{ $aluno->nome }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado.</p>
    @endif
@endsection