<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_issues', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->integer('personnel_id')->nullable();
            $table->string('date_issue')->nullable();
            $table->string('remarks')->nullable();
            $table->string('return_date')->nullable();
            $table->tinyInteger('stat')->default('0')->comment('0=Pending, 1=Approved');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('product_issues');
    }
};
