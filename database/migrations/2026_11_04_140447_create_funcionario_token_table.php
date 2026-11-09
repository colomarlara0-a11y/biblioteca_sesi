
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('login_funcionario_token', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('login_funcionario_id');
            $table->foreign('login_funcionario_id')
                  ->references('id')
                  ->on('login_funcionario')
                  ->onDelete('cascade');
            $table->text('token');
            $table->timestamp('valido_ate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('login_funcionario_token');
    }
};
