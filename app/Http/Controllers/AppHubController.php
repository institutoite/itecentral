<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\RedSocial;
use Illuminate\Support\Facades\DB;


class AppHubController extends Controller
{
    public function index()
    {
        // Obtener aplicaciones activas ordenadas por clics
        $applications = Application::where('is_active', true)
            ->orderByDesc('clicks')
            ->get();

        // Obtener redes sociales activas
        $redesSociales = RedSocial::where('is_active', true)->get();

        // Preparar el array final con aplicaciones y redes sociales intercaladas
        $items = $this->intercalarRedesSociales($applications, $redesSociales);

        return view('welcome', compact('items'));
    }

    public function redirect(Request $request, $slug)
    {
        $application = Application::where('slug', $slug)->firstOrFail();

        // Incrementar el contador de clics
        $application->increment('clicks');

        return redirect($application->url);
    }

    public function statistics()
    {
        $applications = Application::orderByDesc('clicks')->get();

        $totalClicks = $applications->sum('clicks');
        
        // Obtener clics por día (últimos 30 días)
        $clicksByDay = DB::table('applications')
            ->select(DB::raw('DATE(updated_at) as date'), DB::raw('SUM(clicks) as count'))
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->limit(30)
            ->get();

        return view('app-hub.statistics', compact('applications', 'totalClicks', 'clicksByDay'));
    }

    /**
     * Intercala redes sociales entre las aplicaciones
     * 
     * @param \Illuminate\Database\Eloquent\Collection $applications
     * @param \Illuminate\Database\Eloquent\Collection $redesSociales
     * @return array
     */
    private function intercalarRedesSociales($applications, $redesSociales)
    {
        // Si no hay redes sociales, devolver solo las aplicaciones
        if ($redesSociales->isEmpty()) {
            return $applications->map(function ($app) {
                return [
                    'type' => 'app',
                    'data' => $app
                ];
            })->toArray();
        }

        $items = [];
        $redesCount = $redesSociales->count();
        $redesIndex = 0;
        
        // Mostrar una red social cada 3 aplicaciones
        $frecuencia = 3;
        $contador = 0;

        foreach ($applications as $app) {
            $items[] = [
                'type' => 'app',
                'data' => $app
            ];
            
            $contador++;
            
            // Después de cada 'frecuencia' aplicaciones, insertar una red social
            if ($contador % $frecuencia === 0 && !empty($redesSociales)) {
                $items[] = [
                    'type' => 'social',
                    'data' => $redesSociales[$redesIndex % $redesCount]
                ];
                
                $redesIndex++;
            }
        }
        
        return $items;
    }
}
