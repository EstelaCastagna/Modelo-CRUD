@extends('layouts.app')
@section('content')
    <form class="p-4 bg-white rounded-lg shadow-lg max-w-md mx-auto" action="" method="post">
        <h2 class="my-5 font-bold text-center text-2xl">Cliente Físico</h2>
        <div class="mb-4">
            @csrf
             <x-alert />
            {{-- @if ($errors->any())
                <script>
                    alert('Erros no formulário:\n\n{{ implode('\n', $errors->all()) }}');
                </script>
            @endif

            @if (session('success'))
                <script>
                    alert('{{ session('success') }}');
                </script>
            @endif --}}

            <label for="username" class="form-label">Nome Completo</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control">
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="cpf" class="form-label">CPF</label>
                <input placeholder="Apenas números" type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" class="form-control">
            </div>
            <div class="col">
                <label for="rg" class="form-label">RG</label>
                <input type="text" id="rg" name="rg" value="{{ old('rg') }}" class="form-control">
            </div>
            <div class="col">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" id="celular" name="celular" value="{{ old('celular') }}" class="form-control">
            </div>
            <div class="col">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>
            <div class="col">
                <label for="nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" id="nascimento" name="nascimento" value="{{ old('nascimento') }}" class="form-control">
            </div>
        </div>

        <h2 class="my-5 font-bold text-center text-2xl">Endereço</h2>

        <div class="mb-4">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" id="cep" name="cep" value="{{ old('cep') }}" class="form-control">
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" id="logradouro" name="logradouro" value="{{ old('logradouro') }}" readonly class="form-control">
            </div>
            <div class="col">
                <label for="numero" class="form-label">Número</label>
                <input type="text" id="numero" name="numero" value="{{ old('numero') }}" class="form-control">
            </div>
            <div class="col">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="bairro" id="bairro" name="bairro" value="{{ old('bairro') }}" readonly class="form-control">
            </div>
            <div class="col">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}" readonly class="form-control">
            </div>
            <div class="col">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" id="estado" name="estado" value="{{ old('estado') }}" readonly class="form-control">
            </div>
            <div class="col">
                <label for="pais" class="form-label">País</label>
                <input type="text" id="pais" name="pais" value="{{ old('pais') }}" readonly class="form-control">
            </div>
        </div>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">CADASTRAR</button>
        </div>
    </form>
    {{-- <script>
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
    </script> --}}
@endsection
