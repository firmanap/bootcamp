<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi', 3000);
            $table->string('author');
            $table->string('emailAuthor')->nullable();
            $table->timestamps();
        });

        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->integer('id_materi');
            $table->string('pertanyaan');
            $table->timestamps();
        });

        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ujian');
            $table->string('jawaban');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_materi');
            $table->string('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('materi');
        Schema::dropIfExists('ujian');
        Schema::dropIfExists('jawaban');
        Schema::dropIfExists('nilai');
    }
}
