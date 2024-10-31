<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama'); // Name of the student
            $table->date('tanggal_lahir'); // Date of birth
            $table->text('alamat'); // Address
            $table->string('telepon', 15); // Phone number
            $table->string('email')->unique(); // Email, must be unique
            $table->enum('jenis_kelamin', ['L', 'P']); // Gender: Laki-Laki or Perempuan
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
