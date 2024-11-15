<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Link::create([
            'title' => 'Instituto Educabol (ITE)',
            'slug' => 'instituto-tecnico-educabol',
            'url' => 'https://ite.com.bo',
            'image' => 'https://ite.com.bo/assets/images/ite-logo.jpg',
            'seo_description' => 'En ITE, transformamos la educación con tecnología. Cursos de robótica, programación y habilidades digitales para estudiantes de todas las edades.',
            'seo_keywords' => 'ITE, educación tecnológica, robótica, programación, habilidades digitales, cursos para niños, Bolivia',
            'clicks' => 0,
            'hover_count' => 0,

            'facebook_clicks' => 0,
            'tiktok_clicks' => 0,
            'instagram_clicks' => 0,
            'youtube_clicks' => 0,
            'whatsapp_clicks' => 0,

            'facebook_link' => 'https://www.facebook.com/ite.educabol',
            'tiktok_link' => 'https://www.tiktok.com/@ite_educabol',
            'instagram_link' => 'https://www.instagram.com/ite_educabol',
            'youtube_link' => 'https://www.youtube.com/channel/ite_educabol',
            'whatsapp_link' => 'https://wa.me/59171039910',
        ]);
    }
}
