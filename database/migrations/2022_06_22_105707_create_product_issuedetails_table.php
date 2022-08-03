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
        Schema::create('product_issuedetails', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('personel_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('date_issue')->nullable();
            $table->string('remarks')->nullable();
            $table->string('return_date')->nullable();
            $table->double('issuing_qty')->nullable();
            $table->tinyInteger('stat')->default(1);
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
        Schema::dropIfExists('product_issuedetails');
    }
};
