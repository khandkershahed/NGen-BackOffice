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
        Schema::create('employee_tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')->nullable()->constrained('admins')->cascadeOnDelete();//

            $table->string('name')->nullable();//
            $table->string('slug')->unique();//
            $table->text('description')->nullable();//
            $table->year('fiscal_year')->nullable();//

            $table->enum('quarter', ['q1', 'q2', 'q3', 'q4'])->nullable();//

            $table->string('month')->nullable();//
            $table->dateTime('create_date')->nullable();//
            $table->dateTime('start_date')->nullable();//
            $table->dateTime('end_date')->nullable();//
            $table->dateTime('extended_date')->nullable();//

            $table->integer('duration')->nullable()->comment('auto calculation in hours');//

            $table->json('supervisors')->nullable();//
            $table->json('notify_id')->nullable();
            
            $table->integer('point')->nullable();//
            $table->integer('score')->nullable();//
            $table->integer('supervisor_rating')->nullable();//
            $table->integer('hr_rating')->nullable();//
            $table->integer('ceo_rating')->nullable();//

            $table->text('supervisor_review')->nullable();//
            $table->text('hr_review')->nullable();//
            $table->text('ceo_review')->nullable();//
            $table->text('comment')->nullable();//
            $table->text('extended_note')->nullable();//

            $table->string('kpi_percentage')->nullable();//
            $table->string('priority')->nullable();//
            $table->string('status')->nullable();//

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_tasks');
    }
};
