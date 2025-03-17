<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applications = [
            [
                'name' => 'ite propuestos',
                'slug' => Str::slug('ite propuestos'),
                'description' => 'Esta app genera ejercicios propuestos de sumas restas multiplicaciones y divisiones',
                'image' => 'propuestos.png',
                'clicks' => 0,
                'url' => 'https://propuestos.ite.com.bo',
                'thumbnail' => 'thumbnail1.jpg',
                'is_active' => true,
                'position' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ite solve',
                'slug' => Str::slug('ite solve'),
                'description' => 'Esta aplicacion resuelve paso a paso divisiones de una de dos y mas cifras',
                'image' => 'itesolve.png',
                'clicks' => 0,
                'url' => 'https://itesolve.ite.com.bo',
                'thumbnail' => 'thumbnail2.jpg',
                'is_active' => true,
                'position' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ite ias',
                'slug' => Str::slug('ite ias'),
                'description' => 'Esta aplicacion reunte todas las inteligencias artificiales en todas sus categorias en un solo lugar',
                'image' => 'iteias',
                'clicks' => 0,
                'url' => 'https://ias.ite.com.bo',
                'thumbnail' => 'thumbnail2.jpg',
                'is_active' => true,
                'position' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ite notas',
                'slug' => Str::slug('ite notas'),
                'description' => 'Esta aplicación calcula cuantos puntos le hacen falta para pasar de curso.',
                'image' => 'image2.jpg',
                'clicks' => 0,
                'url' => 'https://notas.ite.com.bo',
                'thumbnail' => 'thumbnail2.jpg',
                'is_active' => true,
                'position' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Calamar',
                'slug' => Str::slug('calamar'),
                'description' => 'Esta aplicación registra a los participanes del juego del calamar',
                'image' => 'image2.jpg',
                'clicks' => 0,
                'url' => 'https://calamar.ite.com.bo',
                'thumbnail' => 'thumbnail2.jpg',
                'is_active' => true,
                'position' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            // Puedes agregar más aplicaciones aquí
        ];

        // Insertar los datos en la tabla 'applications'
        DB::table('applications')->insert($applications);
    }
}
