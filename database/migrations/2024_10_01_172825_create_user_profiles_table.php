<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->string('viber')->nullable();
            $table->string('plan')->default('basic'); // To store the selected plan ('basic' or 'complete')
            
            // Fields for 'Curios' section
            $table->string('time_investment')->nullable();
            $table->string('current_profession')->nullable();
            $table->decimal('capital_investment', 10, 2)->nullable();

            // Fields for 'Amateur' section
            $table->string('work_field')->nullable();
            $table->integer('daily_orders')->nullable();
            $table->string('problems')->nullable();
            $table->text('additional_problems')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
