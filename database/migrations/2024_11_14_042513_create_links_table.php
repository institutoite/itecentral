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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Título del enlace
            $table->string('slug')->unique(); // Identificador único para la URL amigable
            $table->string('url'); // URL del enlace
            $table->string('image',50)->nullable(); // Nuevo campo para la imagen

            $table->string('seo_description',250)->nullable(); // Descripción SEO
            $table->string('descripcion',250)->nullable(); // Descripción SEO
            $table->string('seo_keywords')->nullable(); // Palabras clave SEO
            // Métricas generales
            $table->unsignedBigInteger('clicks')->default(0); // Contador de clics generales
            $table->unsignedBigInteger('hover_count')->default(0); // Contador de "hover" del mouse
            // Contadores de clics en redes sociales
            $table->unsignedBigInteger('facebook_clicks')->default(0); // Contador de clics en Facebook
            $table->unsignedBigInteger('tiktok_clicks')->default(0); // Contador de clics en TikTok
            $table->unsignedBigInteger('instagram_clicks')->default(0); // Contador de clics en Instagram
            $table->unsignedBigInteger('youtube_clicks')->default(0); // Contador de clics en YouTube
            $table->unsignedBigInteger('whatsapp_clicks')->default(0); // Contador de clics en YouTube
            
            $table->string('facebook_link',100)->nullable(); // Contador de clics en Facebook
            $table->string('tiktok_link',100)->nullable(); // Contador de clics en TikTok
            $table->string('instagram_link',100)->nullable(); // Contador de clics en Instagram
            $table->string('youtube_link',100)->nullable(); // Contador de clics en YouTube
            $table->string('whatsapp_link',100)->nullable(); // Contador de clics en YouTube
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
