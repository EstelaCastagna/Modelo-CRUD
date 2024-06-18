{{-- @extends('layouts.sideBar')
@section('content')
    <form class=" flex flex-col justify-end" action="{{ route('atualizar.fisico') }}" method="post">
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
        <h2 class="my-5 font-bold text-w text-2xl">Cliente Físico</h2>
        <input type="hidden" name="cpf_pessoa_fisica" value="{{ $pessoasFisicas->cpf_pessoa_fisica }}">
        
        <div class=" flex flex-col items-start">
            <label for="">Nome Completo</label>
            <input type="text" id="username" name="username"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ $pessoasFisicas->nome_pessoa_fisica }}">
            </li>
        </div>

            <div class=" flex flex-col items-start">
                <label for="">ID Pessoa Contato</label>
                <input type="text" id="id" name="id"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->id_pessoas_contato }}" readonly>
            </div>


        <div class="grid grid-cols-2 gap-y-5 gap-x-10 mt-5 ">

            <div class=" flex flex-col items-start">
                <label for="">CPF</label>
                <input type="text" id="cpf" name="cpf"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $pessoasFisicas->cpf_pessoa_fisica }}">
            </div>

            <div class=" flex flex-col items-start">
                <label for="">RG</label>
                <input type="text" id="rg" name="rg"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2
                     focus:ring-blue-500"value="{{ $pessoasFisicas->rg_pessoa_fisica }}">
            </div>

            <div class=" flex flex-col items-start">
                <label for="">Celular</label>
                <input type="text" id="celular" name="celular"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->celular_pessoas_contato}}">
            </div>

            <div class=" flex flex-col items-start">
                <label for="">E-mail</label>
                <input type="text" id="email" name="email"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"value="{{ $pessoasContatos->email_pessoas_contato}}">
            </div>

            <div class=" flex flex-col items-start">
                <label for="">Data de Nascimento</label>
                <input type="date" id="nascimento" name="nascimento"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $pessoasFisicas->data_nascimento_pessoa_fisica }}">
            </div>

        </div>
        <div>

            <h2 class="my-5 font-bold text-w text-2xl">Endereço</h2>

            <div class=" flex flex-col items-start">
                <label for="">CEP</label>
                <input type="text" id="cep" name="cep"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"value="{{ $pessoasContatos->cep_pessoas_contato}}">

            </div>

            <div class="grid grid-cols-2 gap-y-5 gap-x-10 mt-5 ">

                <div class=" flex flex-col items-start">
                    <label for="">Logradouro</label>
                    <input type="text" id="logradouro" name="logradouro"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->logradouro_pessoas_contato}}" readonly>
                </div>

                <div class=" flex flex-col items-start">
                    <label for="">Número</label>
                    <input type="text" id="numero" name="numero"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->numero_pessoas_contato}}">
                </div>

                <div class=" flex flex-col items-start">
                    <label for="">Bairro</label>
                    <input type="text" id="bairro" name="bairro"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->bairro_pessoas_contato}}"readonly>
                </div>


                <div class=" flex flex-col items-start">
                    <label for="">Cidade</label>
                    <input type="text" id="cidade" name="cidade"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->cidade_pessoas_contato}}"readonly>
                </div>

                <div class=" flex flex-col items-start">
                    <label for="">Estado</label>
                    <input type="text" id="estado" name="estado"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->estado_pessoas_contato}}"readonly>
                </div>

                <div class=" flex flex-col items-start">
                    <label for="">País</label>
                    <input type="text" id="pais" name="pais"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $pessoasContatos->pais_pessoas_contato}}"readonly>
                </div>

            </div>
            <div class="flex justify-end py-4">
                <button href="" type="submit"
                    class="bg-[#1F73B8] text-white font-bold py-2 px-4 rounded-lg ">ATUALIZAR</button>
            </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cepInput = document.getElementById('cep');

            cepInput.addEventListener('blur', function() {
                const cep = this.value.replace(/\D/g, '');
                if (cep.length === 8) {
                    fetch(`https://viacep.com.br/ws/${cep}/json/`)
                        .then(response => response.json())
                        .then(data => {
                            if (!data.erro) {
                                document.getElementById('logradouro').value = data.logradouro;
                                document.getElementById('bairro').value = data.bairro;
                                document.getElementById('cidade').value = data.localidade;
                                document.getElementById('estado').value = data.uf;
                                document.getElementById('pais').value = 'Brasil';
                            } else {
                                alert('CEP não encontrado!');
                            }
                        })
                        .catch(error => {
                            console.error('Erro ao buscar CEP:', error);
                            alert('Erro ao buscar CEP. Tente novamente mais tarde.');
                        });
                } else {
                    alert('CEP inválido!');
                }
            });
        });
    </script>
@endsection --}}
