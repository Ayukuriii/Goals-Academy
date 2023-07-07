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
        Schema::create('ongoing_programs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('program_services_id');
            $table->string('tutor_id');
            $table->string('payment_status_id');
            $table->string('program_session_id');
            $table->enum('location', ['online', 'offline']);
            $table->string('links')->nullable();
            $table->date('date');
            $table->boolean('is_tutor');
            $table->boolean('is_moderator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongoing_programs');
    }
};
