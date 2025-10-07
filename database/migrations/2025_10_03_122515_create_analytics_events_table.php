<?php

declare(strict_types=1);

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
        Schema::create('analytics_events', function (Blueprint $table): void {
            $table->id();
            $table->date('date');
            $table->string('event_name');
            $table->string('event_category');
            $table->string('event_action');
            $table->string('event_label')->nullable();
            $table->integer('event_count')->default(0);
            $table->decimal('event_value', 15, 2)->nullable();
            $table->timestamps();

            $table->index('date');
            $table->index('event_name');
            $table->unique(['date', 'event_name', 'event_category', 'event_action', 'event_label'], 'analytics_events_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics_events');
    }
};
