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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('department')->nullable(); //['admin','business','accounts','site','logistics','marketing','support']
            $table->string('designation')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();

            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();

            $table->string('biometric_id')->nullable();
            $table->date('deactivation_start')->nullable();
            $table->integer('deactivation_period')->nullable();
            $table->date('deactivation_end')->nullable();

            $table->enum('role', ['superadmin','admin','manager','others','support_developer'])->default('others');
            $table->string('status')->default('active');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
