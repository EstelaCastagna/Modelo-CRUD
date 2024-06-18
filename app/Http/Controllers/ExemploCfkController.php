<?php

// <?php

// namespace App\Http\Controllers\Cadastro;

// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;
// use App\Models\Pessoa_Fisica;
// use Illuminate\Validation\Rule;
// use App\Models\Pessoas_Contato;
// use Illuminate\Http\Request;
// use App\Rules\CPFValidationRule;

// use Exception;


// class ClienteFisicoController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //READ
//         $pessoas_contato = \App\Models\Pessoas_Contato::all();
//         $pessoas_fisicas = \App\Models\Pessoa_Fisica::all();

//         return view('relatorios.clienteFisico', [
//             'pessoas_contato' => $pessoas_contato,
//             'pessoas_fisicas' => $pessoas_fisicas
//         ]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create(Request $request)
//     {
//         return view('cadastros.form-cliente-fisico');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {

//         $request->validate([
//             'cep' => 'required|string|max:11',
//             'logradouro' => 'required|string|max:255',
//             'numero' => 'required|string|max:6',
//             'bairro' => 'required|string|max:255',
//             'cidade' => 'required|string|max:255',
//             'estado' => 'required|string|max:255',
//             'pais' => 'required|string|max:255',
//             'celular' => 'required|digits_between:6,20',
//             'email' => 'required|email|max:120|unique:pessoas_contato,email_pessoas_contato',
//             'cpf' => ['required', 'string', 'unique:pessoas_fisicas,cpf_pessoa_fisica', new CPFValidationRule],
//             'rg' => 'required|string|digits_between:5,20|unique:pessoas_fisicas,rg_pessoa_fisica',
//             'username' => 'required|string|max:255',
//             'nascimento' => 'required'
//         ], [
//             'cep.required' => 'O campo CEP é obrigatório.',
//             'cep.max' => 'O campo CEP deve possuir no máximo 11 dígitos.',
//             'logradouro.required' => 'O campo Logradouro é obrigatório.',
//             'numero.required' => 'O campo Número é obrigatório.',
//             'bairro.required' => 'O campo Bairro é obrigatório.',
//             'cidade.required' => 'O campo Cidade é obrigatório.',
//             'estado.required' => 'O campo Estado é obrigatório.',
//             'pais.required' => 'O campo País é obrigatório.',
//             'celular.required' => 'O campo Celular é obrigatório.',
//             'celular.digits_between' => 'O campo Celular deve ter entre 6 e 20 dígitos.',
//             'email.required' => 'O campo E-mail é obrigatório.',
//             'email.email' => 'O campo E-mail deve conter um endereço de e-mail válido.',
//             'email.unique' => 'O E-mail informado já está em uso.',
//             'cpf.required' => 'O campo CPF é obrigatório.',
//             'cpf.unique' => 'O CPF informado já está em uso.',
//             'rg.required' => 'O campo RG é obrigatório.',
//             'rg.digits_between' => 'O campo RG deve ter entre 9 e 20 dígitos.',
//             'rg.unique' => 'O RG informado já está em uso.',
//             'username.required' => 'O campo Nome Completo é obrigatório.',
//             'username.max' => 'O campo Nome Completo deve ter no máximo 255 caracteres.',
//             'nascimento.required' => 'O campo data de nascimento é obrigatório.'
//         ]);

//         $pessoasContato = new \App\Models\Pessoas_Contato();
//         $pessoasContato->cep_pessoas_contato = $request->cep;
//         $pessoasContato->logradouro_pessoas_contato = $request->logradouro;
//         $pessoasContato->numero_pessoas_contato = $request->numero;
//         $pessoasContato->bairro_pessoas_contato = $request->bairro;
//         $pessoasContato->cidade_pessoas_contato = $request->cidade;
//         $pessoasContato->estado_pessoas_contato = $request->estado;
//         $pessoasContato->pais_pessoas_contato = $request->pais;
//         $pessoasContato->celular_pessoas_contato = $request->celular;
//         $pessoasContato->email_pessoas_contato = $request->email;
//         $pessoasContato->save();

//         $idPessoasContato = $pessoasContato->id_pessoas_contato;

//         $pessoaFisica = new Pessoa_Fisica();
//         $pessoaFisica->cpf_pessoa_fisica = $request->cpf;
//         $pessoaFisica->id_pessoas_contato = $idPessoasContato;
//         $pessoaFisica->rg_pessoa_fisica = $request->rg;
//         $pessoaFisica->nome_pessoa_fisica = $request->username;
//         $pessoaFisica->data_nascimento_pessoa_fisica = $request->nascimento;
//         $pessoaFisica->save();


//         return Redirect()->route('cadastro.fisico');
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
//         $pessoasFisicas = \App\Models\Pessoa_Fisica::find($request->cpf_pessoa_fisica);


//         $pessoasContatos = \App\Models\Pessoas_Contato::find($pessoasFisicas->id_pessoas_contato);

//         return view('atualizacoes.att-cliente-fisico', [
//             'pessoasContatos' => $pessoasContatos,
//             'pessoasFisicas' => $pessoasFisicas
//         ]);
//     }


//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Pessoa_Fisica $pessoasFisicas)
//     {
//         $request->validate([
//             'cep' => 'required|string|max:11',
//             'logradouro' => 'required|string|max:255',
//             'numero' => 'required|string|max:6',
//             'bairro' => 'required|string|max:255',
//             'cidade' => 'required|string|max:255',
//             'estado' => 'required|string|max:255',
//             'pais' => 'required|string|max:255',
//             'celular' => 'required|string|digits_between:6,20',
//             'email' => 'required|email|max:120|unique:pessoas_contato,email_pessoas_contato,' . $request->id . ',id_pessoas_contato',
//             'cpf' => ['required', 'string', 'unique:pessoas_fisicas,cpf_pessoa_fisica,' . $request->cpf_pessoa_fisica . ',cpf_pessoa_fisica', new CPFValidationRule],
//             'rg' => [
//                 'required', 'string', 'digits_between:5,20', Rule::unique('pessoas_fisicas', 'rg_pessoa_fisica')->ignore($request->cpf_pessoa_fisica, 'cpf_pessoa_fisica'),
//             ],
//             'username' => 'required|string|max:255',
//             'nascimento' => 'required|date',
//         ], [
//             'cep.required' => 'O campo CEP é obrigatório.',
//             'cep.max' => 'O campo CEP deve possuir no máximo 11 caracteres.',
//             'logradouro.required' => 'O campo Logradouro é obrigatório.',
//             'numero.required' => 'O campo Número é obrigatório.',
//             'bairro.required' => 'O campo Bairro é obrigatório.',
//             'cidade.required' => 'O campo Cidade é obrigatório.',
//             'estado.required' => 'O campo Estado é obrigatório.',
//             'pais.required' => 'O campo País é obrigatório.',
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
//             'nascimento.required' => 'O campo Data de Nascimento é obrigatório.',
//             'nascimento.date' => 'O campo Data de Nascimento deve ser uma data válida.',
//         ]);

//         // Encontrar e atualizar o registro de Pessoa Física
//         $pessoaFisica = Pessoa_Fisica::findOrFail($request->cpf_pessoa_fisica);
//         $pessoaFisica->cpf_pessoa_fisica = $request->cpf;
//         $pessoaFisica->rg_pessoa_fisica = $request->rg;
//         $pessoaFisica->nome_pessoa_fisica = $request->username;
//         $pessoaFisica->data_nascimento_pessoa_fisica = $request->nascimento;
//         $pessoaFisica->save();

//         // Encontrar e atualizar o registro de Contato
//         $pessoaContato = Pessoas_Contato::findOrFail($request->id);
//         $pessoaContato->cep_pessoas_contato = $request->cep;
//         $pessoaContato->logradouro_pessoas_contato = $request->logradouro;
//         $pessoaContato->numero_pessoas_contato = $request->numero;
//         $pessoaContato->bairro_pessoas_contato = $request->bairro;
//         $pessoaContato->cidade_pessoas_contato = $request->cidade;
//         $pessoaContato->estado_pessoas_contato = $request->estado;
//         $pessoaContato->pais_pessoas_contato = $request->pais;
//         $pessoaContato->celular_pessoas_contato = $request->celular;
//         $pessoaContato->email_pessoas_contato = $request->email;
//         $pessoaContato->save();

//         // Redirecionar após a atualização
//         return redirect()->route('relatorio.clienteFisico');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $cpf)
//     {
//         $pessoaFisica = Pessoa_Fisica::findOrFail($cpf);
//         $pessoaFisica->delete();

//         return redirect()->route('relatorio.clienteFisico');
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploCfkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.cadastroCfkExemplo');
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
