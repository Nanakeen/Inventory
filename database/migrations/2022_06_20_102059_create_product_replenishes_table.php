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
        Schema::create('product_replenishes', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->integer('personnel_id')->nullable();
            $table->string('replenish_date')->nullable();
            $table->string('quantity')->nullable();
            $table->string('status')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('product_replenishes');
    }
};
