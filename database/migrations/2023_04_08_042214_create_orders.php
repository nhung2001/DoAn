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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->tinyInteger('status');
            $table->double('total');

            $table->foreignId('shipping_id')->nullable()
                ->constrained('shipping')
                ->onDelete('cascade');
            $table->foreignId('users_id')->nullable()
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('payments_id')->nullable()
                ->constrained('payments')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
