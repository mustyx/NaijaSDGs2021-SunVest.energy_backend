<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('trxId')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('investment_id')->nullable();
            $table->unsignedInteger('amount')->nullable();
            $table->boolean('paid')->default(false)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('investment_id')->references('id')->on('investments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *///
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
