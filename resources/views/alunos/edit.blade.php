<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Aluno
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <form action="/alunos/{{ $aluno->id }}" method="POST">
                @csrf
                @method('PUT')

                <label>Nome:</label>
                <input type="text" name="nome" value="{{ $aluno->nome }}"><br>

                <label>Curso:</label>
                <input type="text" name="curso" value="{{ $aluno->curso }}"><br>

                <button type="submit">Atualizar</button>
            </form>
        </div>
    </div>
</x-app-layout>