<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBonusAndOvertimePayToPayrollTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payrolls', function (Blueprint $table) {
            $table->decimal('bonus', 8, 2)->nullable()->before('net_salary'); // Adds 'bonus' column
            $table->decimal('overtime_pay', 8, 2)->nullable()->after('overtime_rate'); // Adds 'overtime_pay' column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payrolls', function (Blueprint $table) {
            $table->dropColumn(['bonus', 'overtime_pay']);
        });
    }
}
