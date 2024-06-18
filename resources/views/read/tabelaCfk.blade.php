{{-- @extends('layouts.sideBar')

@section('content')
    <h1 class="my-5 font-bold text-w text-2xl">Relatorio de Cliente</h1>


    <div class="flex justify-center gap-x-10 font-regular text-w text-2xl">
        <a href="{{ route('relatorio.clienteFisico') }}" class="bg-blue-900 text-white p-6 rounded-lg">Físico</a>
        <a href="{{ route('relatorio.clienteJuridico') }}" class="bg-blue-900 text-white p-6 rounded-lg">Jurídico</a>
    </div>
    <label for="">Pesquisar</label>
    <form class="flex items-center" method="get" action="{{ route('pesquisar.clienteFisico') }}">
        <div class="flex-1 mr-2">
            <input type="text" name="pesquisar" value="{{ isset($pesquisar) ? $pesquisar : '' }}" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Pesquisar..." aria-label="Pesquisar">
        </div>
        <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg" type="submit">Pesquisar</button>
    </form>

        @if ($pessoas_fisicas !== null)
        <p>Número de registros: {{ count($pessoas_fisicas) }}</p>
    @else
        <p>Número de registros: 0</p>
    @endif

    <table class="table-auto w-full border-collapse">
        <thead>
            <tr class="border-b">
                <th class="px-4 py-2 text-left">CPF</th>
                <th class="px-4 py-2 text-left">Nome</th>
                <th class="px-4 py-2 text-left">RG</th>
                <th class="px-4 py-2 text-left">Data de Nascimento</th>
                <th class="px-4 py-2 text-left">Celular</th>
                <th class="px-4 py-2 text-left">E-mail</th>
                <th class="px-4 py-2 text-left">CEP</th>
                <th class="px-4 py-2 text-left">Logradouro</th>
                <th class="px-4 py-2 text-left">Número</th>
                <th class="px-4 py-2 text-left">Bairro</th>
                <th class="px-4 py-2 text-left">Ações</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas_contato as $pessoa_contato)
                @foreach ($pessoas_fisicas as $pessoa_fisica)
                    <tr class="border-b hover:bg-teal-100">
                        @if ($pessoa_fisica->id_pessoas_contato == $pessoa_contato->id_pessoas_contato)
                            <td class="text-left px-4 py-2">{{ $pessoa_fisica->cpf_pessoa_fisica }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_fisica->nome_pessoa_fisica }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_fisica->rg_pessoa_fisica }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_fisica->data_nascimento_pessoa_fisica }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_contato->celular_pessoas_contato }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_contato->email_pessoas_contato }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_contato->cep_pessoas_contato }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_contato->logradouro_pessoas_contato }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_contato->numero_pessoas_contato }}</td>
                            <td class="text-left px-4 py-2">{{ $pessoa_contato->bairro_pessoas_contato }}</td>
                            <td class="flex">

                                <a href="{{ route('editar.fisico', ['cpf_pessoa_fisica' => $pessoa_fisica->cpf_pessoa_fisica]) }}"
                                    class="bg-[#1F73B8] text-white py-2 px-4 rounded-lg">Atualizar</a>

                                <a href="#" class="bg-red-600 text-white py-2 px-4 rounded-lg"
                                   onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pessoa_fisica->cpf_pessoa_fisica }}').submit();">
                                    Deletar
                                </a>
                                <form id="delete-form-{{ $pessoa_fisica->cpf_pessoa_fisica }}" action="{{ route('deletar.fisico', ['cpf' => $pessoa_fisica->cpf_pessoa_fisica]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            </td>
                        @endif
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
@endsection --}}