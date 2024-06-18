{{-- @extends('layouts.sideBar')

    @section('content')
    <h1 class="my-5 font-bold text-w text-2xl">Relatorio de Funcionarios</h1>
    
    <label for="">Pesquisar</label>
    <form class="flex items-center" method="get" action="{{ route('pesquisar.funcionario') }}">
        <div class="flex-1 mr-2">
            <input type="text" name="pesquisar" value="{{ isset($pesquisar) ? $pesquisar : '' }}" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Pesquisar..." aria-label="Pesquisar">
        </div>
        <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg" type="submit">Pesquisar</button>
    </form>
        @if ($funcionarios !== null)
        <p>Número de registros: {{ count($funcionarios) }}</p>
    @else
        <p>Número de registros: 0</p>
    @endif

    <table class="table-auto w-full border-collapse">
        <thead>
            <tr class="border-b">
                <th class="px-4 py-2 text-left">CPF</th>
                <th class="px-4 py-2 text-left">Nome</th>
                <th class="px-4 py-2 text-left">RG</th>
                <th class="px-4 py-2 text-left">Celular</th>
                <th class="px-4 py-2 text-left">E-mail</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr class="border-b hover:bg-teal-100">
                   
                            <td class="text-left px-4 py-2">{{ $funcionario->cpf_funcionario }}</td>
                            <td class="text-left px-4 py-2">{{ $funcionario->nome_funcionario }}</td>
                            <td class="text-left px-4 py-2">{{ $funcionario->rg_funcionario}}</td>
                            <td class="text-left px-4 py-2">{{ $funcionario->celular_funcionario }}</td>
                            <td class="text-left px-4 py-2">{{ $funcionario->email_funcionario }}</td>
                            <td class="flex">
                                <a href="{{ route('editar.funcionario', ['cpf_funcionario' => $funcionario->cpf_funcionario]) }}"
                                    class="bg-[#1F73B8] text-white py-2 px-4 rounded-lg">Atualizar</a>
                                 <a href="#" class="bg-red-600 text-white py-2 px-4 rounded-lg"
                                   onclick="event.preventDefault(); document.getElementById('delete-form-{{$funcionario->cpf_funcionario}}').submit();">
                                    Deletar
                                </a>
                                <form id="delete-form-{{  $funcionario->cpf_funcionario}}" action="{{ route('deletar.funcionario', ['cpf_funcionario' =>  $funcionario->cpf_funcionario]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                       
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection --}}
