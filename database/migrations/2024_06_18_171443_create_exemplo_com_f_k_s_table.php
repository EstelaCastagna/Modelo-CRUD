<?php

// <?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('pessoas_fisicas', function (Blueprint $table) {

//             $table->string('cpf_pessoa_fisica', 14)->primary()->unique();
//             $table->unsignedBigInteger('id_pessoas_contato');
//             $table->string('rg_pessoa_fisica', 20)->unique();
//             $table->string('nome_pessoa_fisica', 200);
//             $table->date('data_nascimento_pessoa_fisica');
//             $table->timestamps();
//             $table->softDeletes();

//             $table->foreign('id_pessoas_contato')
//                 ->references('id_pessoas_contato')
//                 ->on('pessoas_contato');
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('pessoas_fisicas');
//     }
// };


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
        Schema::create('exemplo_com_f_k_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exemplo_com_f_k_s');
    }
};
