<?php

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
        Schema::create('aprovacao', function (Blueprint $table) {
            $table->id();
            $table->string('reprovado');
            $table->string('aprovado');
            $table->text('observacao');
            $table->date('data_aprovacao');
            $table->unsignedBigInteger('login_funcionario_id');
            $table->foreign('login_funcionario_id')->references('id')->on('login_funcionario')->onDelete('cascade');
            $table->unsignedBigInteger('comentario_id');
            $table->foreign('comentario_id')->references('id')->on('comentarios_publicos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aprovacao', function (Blueprint $table) {
            $table->dropForeign(['login_funcionario_id']);
            $table->dropColumn('login_funcionario_id');
            $table->dropForeign(['comentario_id']);
            $table->dropColumn('comentario_id');
        });
        Schema::dropIfExists('aprovacao');
        

    }
};
