<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRgProprietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // cria nova coluna
    {
        Schema::table('proprietarios', function (Blueprint $table) {
            $table->string('rg', 15)->nullable()->after('cpf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // apaga coluna
    {
        Schema::table('proprietarios', function (Blueprint $table) {
            $table->dropColumn('rg');
        });
    }
}
