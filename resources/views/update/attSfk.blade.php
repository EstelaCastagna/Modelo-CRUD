{{-- @extends('layouts.sideBar')

@section('content')
    <form class="relative" action="{{ route('atualizar.funcionario') }}" method="post">
        @method('PUT')
        @csrf
         <x-alert />
        @if ($errors->any())
            <script>
                alert('Erros no formulário:\n\n{{ implode('\n', $errors->all()) }}');
            </script>
        @endif

        @if (session('success'))
            <script>
                alert('{{ session('success') }}');
            </script>
        @endif
        <input type="hidden" name="cpf_funcionario" value="{{ $funcionarios->cpf_funcionario }}">

        <h2 class="my-5 font-bold text-w text-2xl">Funcionário</h2>
        
        <div class="flex flex-col items-start">
            <label for="username">Nome Completo</label>
            <input type="text" id="username" name="username" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $funcionarios->nome_funcionario }}">
        </div>

        <div class="grid grid-cols-2 gap-y-5 gap-x-10 mt-5">
            <div class="flex flex-col items-start">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $funcionarios->cpf_funcionario }}">
            </div>

            <div class="flex flex-col items-start">
                <label for="rg">RG</label>
                <input type="text" id="rg" name="rg" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $funcionarios->rg_funcionario }}">
            </div>

            <div class="flex flex-col items-start">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $funcionarios->celular_funcionario }}">
            </div>

            <div class="flex flex-col items-start">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $funcionarios->email_funcionario }}">
            </div>

            <div class="flex flex-col items-start">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $funcionarios->login_funcionario }}">
            </div>

            <!-- Botão para abrir os campos de senha -->
            <button type="button" id="btn-redefinir-senha" class="bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded-lg mt-2">Redefinir Senha</button>

            <!-- Campos de senha ocultos inicialmente -->
            <div id="campos-senha" style="display: none;">
                <div class="flex flex-col items-start mt-2">
                    <label for="senha_antiga">Senha Antiga</label>
                    <input type="password" id="senha_antiga" name="senha_antiga" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex flex-col items-start mt-2">
                    <label for="nova_senha">Nova Senha</label>
                    <input type="password" id="nova_senha" name="nova_senha" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
        </div>

        <div class="flex justify-end py-4">
            <button type="submit" class="bg-[#1F73B8] text-white font-bold py-2 px-4 rounded-lg">ATUALIZAR</button>
        </div>
    </form>

    <script>
        document.getElementById('btn-redefinir-senha').addEventListener('click', function() {
            document.getElementById('campos-senha').style.display = 'block';
        });
    </script>
@endsection  --}}
