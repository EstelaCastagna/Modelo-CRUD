<?php

// <?php

// namespace App\Http\Controllers\Cadastro;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Funcionario;
// use App\Rules\CPFValidationRule;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Redirect;
// use App\Http\Requests\StoreFuncionarioRequest;

// class FuncionarioController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $funcionarios = \App\Models\Funcionario::all();

//         return view('relatorios.funcionarios', [
//             'funcionarios' => $funcionarios
//         ]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('cadastros.form-funcionario');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $request->validate([

//             'celular' => 'required|digits_between:6,20',
//             'email' => 'required|email|max:120|unique:pessoas_contato,email_pessoas_contato',
//             'cpf' => ['required', 'string', 'unique:pessoas_fisicas,cpf_pessoa_fisica', new CPFValidationRule],
//             'rg' => 'required|string|digits_between:5,20|unique:pessoas_fisicas,rg_pessoa_fisica',
//             'username' => 'required|string|max:255',
//             'login' => 'required|string|max:255|unique:funcionarios,login_funcionario',
//             'senha' => 'required|string|min:8|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
//         ], [
//             'celular.required' => 'O campo Celular é obrigatório.',
//             'celular.digits_between' => 'O campo Celular deve ter entre 6 e 20 dígitos.',
//             'email.required' => 'O campo E-mail é obrigatório.',
//             'email.email' => 'O campo E-mail deve conter um endereço de e-mail válido.',
//             'email.unique' => 'O E-mail informado já está em uso.',
//             'cpf.required' => 'O campo CPF é obrigatório.',
//             'cpf.unique' => 'O CPF informado já está em uso.',
//             'rg.required' => 'O campo RG é obrigatório.',
//             'rg.digits_between' => 'O campo RG deve ter entre 5 e 20 dígitos.',
//             'rg.unique' => 'O RG informado já está em uso.',
//             'username.required' => 'O campo Nome Completo é obrigatório.',
//             'username.max' => 'O campo Nome Completo deve ter no máximo 255 caracteres.',
//             'login.required' => 'O campo Login é obrigatório.',
//             'login.max' => 'O campo Login deve ter no máximo 255 caracteres.',
//             'login.unique' => 'O Login informado já está em uso.',
//             'senha.required' => 'O campo Senha é obrigatório.',
//             'senha.min' => 'O campo Senha deve ter no mínimo 8 caracteres.',
//             'senha.max' => 'O campo Senha deve ter no máximo 20 caracteres.',
//             'senha.regex' => 'O campo Senha deve conter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial.'
//         ]);

//         // Criação do objeto Funcionario
//         $Funcionario = new \App\Models\Funcionario();
//         $Funcionario->create([
//             'nome_funcionario' => $request->username,
//             'cpf_funcionario' => $request->cpf,
//             'rg_funcionario' => $request->rg,
//             'celular_funcionario' => $request->celular,
//             'email_funcionario' => $request->email,
//             'login_funcionario' => $request->login,
//             'password' => bcrypt($request->senha)
//         ]);

//         return redirect()->route('cadastro.funcionario');
//     }
//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Request $request)
//     {
//         $funcionarios = Funcionario::find($request->cpf_funcionario);

//         return view('atualizacoes.att-funcionario', [
//             'funcionarios' => $funcionarios
//         ]);
//     }

//     /**
//      * Update the specified resource in storage.
//      */

//     public function update(Request $request, Funcionario $funcionarios)
//     {
//         // Valida os dados do formulário
//         $request->validate([
//             'username' => 'required|string|max:255',
//             'cpf' => ['required', 'string', 'unique:funcionarios,cpf_funcionario,' . $request->cpf_funcionario . ',cpf_funcionario', new CPFValidationRule],
//             'rg' => 'required|string|digits_between:5,20|unique:funcionarios,rg_funcionario,' . $request->cpf_funcionario . ',cpf_funcionario',
//             'celular' => 'required|digits_between:6,20',
//             'email' => 'required|email|max:120|unique:funcionarios,email_funcionario,' . $request->cpf_funcionario . ',cpf_funcionario',
//             'login' => 'required|string|max:255',
//             'senha_antiga' => 'nullable|string',
//             'nova_senha' => 'nullable|string|min:8'
//         ], [
//             'username.required' => 'O campo Nome Completo é obrigatório.',
//             'cpf.required' => 'O campo CPF é obrigatório.',
//             'cpf.unique' => 'O CPF informado já está em uso.',
//             'rg.required' => 'O campo RG é obrigatório.',
//             'rg.digits_between' => 'O campo RG deve ter entre 5 e 20 dígitos.',
//             'rg.unique' => 'O RG informado já está em uso.',
//             'celular.required' => 'O campo Celular é obrigatório.',
//             'celular.digits_between' => 'O campo Celular deve ter entre 6 e 20 dígitos.',
//             'email.required' => 'O campo E-mail é obrigatório.',
//             'email.email' => 'O campo E-mail deve conter um endereço de e-mail válido.',
//             'email.unique' => 'O E-mail informado já está em uso.',
//             'login.required' => 'O campo Login é obrigatório.',
//             'senha_antiga.required_if' => 'O campo Senha Antiga é obrigatório para atualização da senha.',
//             'nova_senha.min' => 'A nova senha deve ter no mínimo 8 caracteres.'
//         ]);

//         // Busca o funcionário no banco de dados
//         $funcionario = \App\Models\Funcionario::find($request->cpf_funcionario);

//         // Verifica a senha antiga se fornecida
//         if ($request->filled('senha_antiga')) {
//             if (!Hash::check($request->senha_antiga, $funcionario->password)) {
//                 return redirect()->back()->withErrors(['senha_antiga' => 'A senha antiga está incorreta.']);
//             }
//         }

//         // Atualiza os dados do funcionário
//         $funcionario->nome_funcionario = $request->username;
//         $funcionario->cpf_funcionario = $request->cpf;
//         $funcionario->rg_funcionario = $request->rg;
//         $funcionario->celular_funcionario = $request->celular;
//         $funcionario->email_funcionario = $request->email;
//         $funcionario->login_funcionario = $request->login;

//         // Atualiza a senha se foi fornecida
//         if ($request->filled('nova_senha')) {
//             $funcionario->password = Hash::make($request->nova_senha);
//         }

//         // Salva as mudanças no banco de dados
//         $funcionario->save();

//         // Redireciona para a rota 'relatorio.funcionarios'
//         return Redirect::route('relatorio.funcionarios');
//     }

//     public function destroy(string $cpf)
//     {
//         $funcionario = Funcionario::findOrFail($cpf);
//         $funcionario->delete();

//         return redirect()->route('relatorio.funcionarios');
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploSfkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.cadastroSfkExemplo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
