<?php

// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateFuncionariosTable extends Migration

// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void

//     {
//         Schema::create('funcionarios', function (Blueprint $table) {
//             $table->string('cpf_funcionario', 14)->primary()->unique();
//             $table->string('nome_funcionario', 200);
//             $table->string('rg_funcionario', 20)->unique();
//             $table->string('celular_funcionario', 20);
//             $table->string('email_funcionario', 100)->unique();
//             $table->string('login_funcionario', 45);
//             $table->string('password');
//             $table->timestamps();
//             $table->softDeletes(); 
//         });

//     }
      

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {

//         Schema::dropIfExists('funcionarios');
       
//     }
// }


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exemplo_sem_f_k_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplo_sem_f_k_s');
    }
};
