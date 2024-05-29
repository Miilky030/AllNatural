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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('name',  100);
            $table->string('number',12);
            $table->string('email', 100);
            $table->string('method',  50);
            $table->string('address',500);
            $table->string('total_products', 1000);
            $table->decimal('total_price', 11, 4);
            $table->string('placed_on',  50);
            $table->string('payment_status',20);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
