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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->string('phone_number', 15);
            $table->string('email', 200)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status')->default(1)->comment("0 inactive, 1 active");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
    public function getStatusAttribute($value){
        switch($value){
            case 0:
                return "inactive";
            default:
                return "active";
        }

    }
};
