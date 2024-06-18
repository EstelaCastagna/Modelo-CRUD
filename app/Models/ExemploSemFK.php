<?php

// <?php

// namespace App\Models;

// // use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class Funcionario extends Authenticatable
// {

//     use HasFactory, Notifiable;
//     use SoftDeletes;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<int, string>
//      */

//     protected $primaryKey = 'cpf_funcionario';
//     public $incrementing = false;
//     protected $keyType = 'string';

//     protected $fillable = [
//         'cpf_funcionario',
//         'nome_funcionario',
//         'rg_funcionario',
//         'celular_funcionario',
//         'email_funcionario',
//         'login_funcionario',
//         'password'
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */


//     protected $dates = [
//         'deleted_at'
//     ];
//     protected $hidden = [
//         'password'
//     ];

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }

//     public function anotacoes()
//     {
//         return $this->hasMany(Anotacao::class, ' autor_anotacao', 'funcionario_cpf');
//     }
//     public function ordem_servicos()
//     {
//         return $this->hasMany(Ordem_Servico::class, ' cpf_funcionario', 'cpf_funcionario');
//     }

//     public function getAuthIdentifierName()
//     {
//         return 'login_funcionario';
//     }

//     public function getAuthIdentifier()
//     {
//         return $this->login_funcionario;
//     }

//     public function getAuthPassword()
//     {
//         return $this->password;
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExemploSemFK extends Model
{
    use HasFactory;
}
