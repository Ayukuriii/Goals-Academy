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
            $table->string('order_detail_id', 6)->nullable();
            $table->string('user_id');
            $table->string('program_services_id');
            $table->string('tutor_id')->nullable();
            $table->enum('payment_status', ['success', 'failed', 'pending']);
            $table->string('program_session');
            $table->text('catatan');
            $table->string('alias')->nullable();
            $table->string('file')->nullable();
            $table->string('links')->nullable();
            $table->string('date');
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
