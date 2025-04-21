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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id'); // Assuming employees are stored in a separate table
            $table->string('month');
            $table->integer('basic_salary');
            $table->integer('allowances')->nullable();
            $table->integer('deductions')->nullable();
            $table->integer('overtime_hours')->nullable();
            $table->decimal('overtime_rate', 8, 2)->nullable();
            $table->decimal('net_salary', 10, 2);
            $table->text('remarks')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
