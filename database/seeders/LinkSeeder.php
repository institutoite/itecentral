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
            'image' => 'ite-logo.jpg',
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
            'instagram_link' => 'https://www.instagram.com/ite.educabol',
            'youtube_link' => 'https://www.youtube.com/@ite_educabol',
            'whatsapp_link' => 'https://wa.me/59171039910',
        ]);
        Link::create([
           'title' => 'PuntoClave', 
            'slug' => 'calculadora-notas-punto-clave',
            'url' => 'https://notas.ite.com.bo',
            'image' => 'notas.jpg',
            'seo_description' => 'En ITE, transformamos la educación con tecnología. La calculadora PuntoClave te ayuda a calcular cuántos puntos necesitas para pasar de curso, a partir de tus notas de los trimestres.',
            'seo_keywords' => 'ITE, calculadora de notas, calcular puntos, aprobar curso, educación tecnológica, robótica, programación, habilidades digitales, Bolivia',
            'clicks' => 0,
            'hover_count' => 0,

            'facebook_clicks' => 0,
            'tiktok_clicks' => 0,
            'instagram_clicks' => 0,
            'youtube_clicks' => 0,
            'whatsapp_clicks' => 0,

            'facebook_link' => 'https://www.facebook.com/ite.educabol',
            'tiktok_link' => 'https://www.tiktok.com/@ite_educabol',
            'instagram_link' => 'https://www.instagram.com/ite.educabol',
            'youtube_link' => 'https://www.youtube.com/@ite_educabol',
            'whatsapp_link' => 'https://wa.me/59171039910',

        ]);
        Link::create([
            'title' => 'Generador de Ejercicios Matemáticos', 
            'slug' => 'generador-ejercicios-matematicos',
            'url' => 'https://propuestos.ite.com.bo',
            'image' => 'propuestos.jpg',
            'seo_description' => 'En ITE, transformamos la educación con tecnología. Con nuestro generador de ejercicios matemáticos, puedes crear ejercicios de suma, resta, multiplicación y división con diferentes niveles de dificultad.',
            'seo_keywords' => 'ITE, generador de ejercicios, matemáticas, suma, resta, multiplicación, división, dificultad, educación tecnológica, Bolivia',
            'clicks' => 0,
            'hover_count' => 0,

            'facebook_clicks' => 0,
            'tiktok_clicks' => 0,
            'instagram_clicks' => 0,
            'youtube_clicks' => 0,
            'whatsapp_clicks' => 0,

            'facebook_link' => 'https://www.facebook.com/ite.educabol',
            'tiktok_link' => 'https://www.tiktok.com/@ite_educabol',
            'instagram_link' => 'https://www.instagram.com/ite.educabol',
            'youtube_link' => 'https://www.youtube.com/@ite_educabol',
            'whatsapp_link' => 'https://wa.me/59171039910',
         ]);
        Link::create([
            'title' => 'Generador de Números Primos', 
            'slug' => 'generador-numeros-primos',
            'url' => 'https://ite.com.bo',
            'image' => 'ite-logo.jpg',
            'seo_description' => 'En ITE, transformamos la educación con tecnología. En nuestro generador de números primos, puedes descubrir todos los números primos desde el 2 hasta el número que ingreses, sin límite.',
            'seo_keywords' => 'ITE, generador de números primos, números primos, matemáticas, educación tecnológica, sin límite, Bolivia',
            'clicks' => 0,
            'hover_count' => 0,

            'facebook_clicks' => 0,
            'tiktok_clicks' => 0,
            'instagram_clicks' => 0,
            'youtube_clicks' => 0,
            'whatsapp_clicks' => 0,

            'facebook_link' => 'https://www.facebook.com/ite.educabol',
            'tiktok_link' => 'https://www.tiktok.com/@ite_educabol',
            'instagram_link' => 'https://www.instagram.com/ite.educabol',
            'youtube_link' => 'https://www.youtube.com/@ite_educabol',
            'whatsapp_link' => 'https://wa.me/59171039910',

         ]);
        Link::create([
            'title' => 'Tarjeta Digital Personalizada', 
            'slug' => 'tarjeta-digital-personalizada',
            'url' => 'https://ite.com.bo',
            'image' => 'ite-logo.jpg',
            'seo_description' => 'En ITE, ofrecemos soluciones tecnológicas innovadoras. Crea tu tarjeta digital personalizada con todos tus enlaces de redes sociales y contacto, ideal para empresas, negocios o profesionales.',
            'seo_keywords' => 'ITE, tarjeta digital personalizada, redes sociales, contactos, tarjeta de presentación, negocios, empresas, profesional, Bolivia',
            'clicks' => 0,
            'hover_count' => 0,

            'facebook_clicks' => 0,
            'tiktok_clicks' => 0,
            'instagram_clicks' => 0,
            'youtube_clicks' => 0,
            'whatsapp_clicks' => 0,

            'facebook_link' => 'https://www.facebook.com/ite.educabol',
            'tiktok_link' => 'https://www.tiktok.com/@ite_educabol',
            'instagram_link' => 'https://www.instagram.com/ite.educabol',
            'youtube_link' => 'https://www.youtube.com/@ite_educabol',
            'whatsapp_link' => 'https://wa.me/59171039910',

         ]);
    }
}
