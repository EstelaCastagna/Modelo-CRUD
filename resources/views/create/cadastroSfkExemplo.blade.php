@extends('layouts.app')
@section('content')
    <form class="p-4 relative" action="" method="post">
        <h2 class="my-5 font-bold text-center text-2xl">Funcionário</h2>
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
                <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" class="form-control">
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
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>
            <div class="col">
                <label for="login" class="form-label">Login</label>
                <input type="text" id="login" name="login" value="{{ old('login') }}" class="form-control">
            </div>
            <div class="col">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" name="senha" value="{{ old('senha') }}" class="form-control">
            </div>
        </div>

        <button href="" type="submit" class="btn btn-primary mt-5">CADASTRAR</button>
    </form>
@endsection
