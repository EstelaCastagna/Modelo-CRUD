<?php

// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;


// class Pessoa_Fisica extends Model
// {
    
//     use HasFactory;
//     use SoftDeletes;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array<string, string>
//      */

//      protected $table = 'pessoas_fisicas';
//      protected $primaryKey = 'cpf_pessoa_fisica';
//      public $incrementing = false;
//      protected $keyType = 'string';

     

//     protected $fillable = [
//        'cpf_pessoa_fisica', 
//        'id_pessoas_contato', 
//        'rg_pessoa_fisica', 
//        'nome_pessoa_fisica', 
//        'data_nascimento_pessoa_fisica'
        
//     ];

//     /**
//      * The attributes that should be mutated to dates.
//      *
//      * @var array<string>
//      */
//     protected $dates = ['deleted_at'];

    
//     public function cliente()
//     {
//         return $this->belongsTo(Pessoas_Contato::class, 'id_pessoas_contato', 'id_pessoas_contato');
//     }

//     protected static function boot()
//     {
//         parent::boot();

//         static::deleting(function ($pessoaFisica) {
//             if ($pessoaFisica->cliente) {
//                 $pessoaFisica->cliente->delete();
//             }
//         });
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExemploComFK extends Model
{
    use HasFactory;
}
