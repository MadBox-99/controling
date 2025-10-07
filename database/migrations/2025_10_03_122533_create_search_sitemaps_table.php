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
        Schema::create('search_sitemaps', function (Blueprint $table): void {
            $table->id();

            $table->string('sitemap_url', 500)->unique();
            $table->timestamp('last_submitted')->nullable();
            $table->boolean('is_pending')->default(false);
            $table->integer('warnings')->default(0);
            $table->integer('errors')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_sitemaps');
    }
};
