<?php

use App\Models\Link;
use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR
use Artesaos\SEOTools\Facades\SEOTools;

// OR

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   // Actualizar metadatos SEO con detalles de ITE

    SEOMeta::setTitle('ITE Educabol - Potencia tu aprendizaje');
    SEOMeta::setDescription('ITE: Cursos de computación, robótica, programación y más para estudiantes y profesionales en Bolivia.');
    SEOMeta::setCanonical('https://ite.com.bo');

    // Configuración Open Graph
    OpenGraph::setDescription('Descubre los mejores cursos en computación, robótica y más en ITE.');
    OpenGraph::setTitle('ITE Educabol - Cursos y Capacitación');
    OpenGraph::setUrl('https://ite.com.bo');
    OpenGraph::addProperty('type', 'website');

    // Configuración Twitter
    TwitterCard::setTitle('ITE Educabol - Aprende con nosotros');
    TwitterCard::setSite('@ite_educabol');

    // Configuración JSON-LD
    JsonLd::setTitle('ITE Educabol - Potencia tu aprendizaje');
    JsonLd::setDescription('Cursos y talleres en tecnología, computación y robótica en Bolivia.');
    JsonLd::addImage('https://ite.com.bo/img/logo-ite.jpg');

    // Alternativa usando SEOTools

    SEOTools::setTitle('ITE Educabol - Cursos de Computación y Tecnología');
    SEOTools::setDescription('Formación en computación, robótica, y programación en Bolivia.');
    SEOTools::opengraph()->setUrl('https://ite.com.bo');
    SEOTools::setCanonical('https://ite.com.bo');
    SEOTools::opengraph()->addProperty('type', 'website');
    SEOTools::twitter()->setSite('@ite_educabol');
    SEOTools::jsonLd()->addImage('https://ite.com.bo/img/logo-ite.jpg');


    $links = Link::orderBy('clicks', 'desc')->get();
    return view('welcome', compact('links'));
});
