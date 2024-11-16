<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Título aleatorio
            'slug' => Str::slug($this->faker->unique()->words(3, true)), // Slug único
            'url' => $this->faker->url(), // URL aleatoria
            'image' => 'default.jpg', // Puedes cambiar esto por una imagen aleatoria si tienes una carpeta de imágenes
            'seo_description' => $this->faker->sentence(10), // Descripción SEO
            'seo_keywords' => implode(', ', $this->faker->words(5)), // Palabras clave separadas por comas
            'clicks' => $this->faker->numberBetween(0, 1000), // Número aleatorio de clics
            'hover_count' => $this->faker->numberBetween(0, 500), // Hover aleatorio
            
            'facebook_clicks' => $this->faker->numberBetween(0, 300),
            'tiktok_clicks' => $this->faker->numberBetween(0, 300),
            'instagram_clicks' => $this->faker->numberBetween(0, 300),
            'youtube_clicks' => $this->faker->numberBetween(0, 300),
            'whatsapp_clicks' => $this->faker->numberBetween(0, 300),
            
            'facebook_link' => $this->faker->url(),
            'tiktok_link' => $this->faker->url(),
            'instagram_link' => $this->faker->url(),
            'youtube_link' => $this->faker->url(),
            'whatsapp_link' => $this->faker->url(),

            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
