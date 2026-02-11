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
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->string('data_layout')->default('vertical');
            $table->string('data_layout_style')->default('default');
            $table->string('data_layout_position')->default('fixed');
            $table->string('data_layout_width')->default('fluid');
            $table->string('data_topbar')->default('light');
            $table->string('data_sidebar')->default('dark');
            $table->string('data_sidebar_size')->default('lg');
            $table->string('data_sidebar_image')->default('none');
            $table->string('data_sidebar_visibility')->default('show');
            $table->string('data_bs_theme')->default('light');
            $table->string('data_preloader')->default('disable');
            $table->string('data_body_image')->default('none');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_settings');
    }
};
