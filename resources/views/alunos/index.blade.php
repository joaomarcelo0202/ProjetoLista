<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Alunos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            @if(count($alunos) > 0)
                <ul>
                    @foreach($alunos as $aluno)
                        <li>
                            <a href="/alunos/{{ $aluno->id }}">{{ $aluno->nome }}</a>

                            <a href="/alunos/{{ $aluno->id }}/edit">Editar</a>

                            <form action="/alunos/{{ $aluno->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">
                                    Excluir
                                </button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Nenhum aluno cadastrado.</p>
            @endif

        </div>
    </div>
</x-app-layout>
