<?php

declare(strict_types=1);

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Route;

Route::post('/logout', function () {
    (new Logout())->__invoke();
    return redirect('/');
})->name('logout');

Route::prefix('admin')->group(function () {

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
});

Route::view('/', 'home')
    ->middleware(['auth'])
    ->name('home');

Route::view('/test', 'test')
    ->middleware(['auth'])
    ->name('test');


// Modificamos la ruta para inyectar $children
Route::get('/{slug}', function () {
    // Creamos los artículos de ejemplo
    class Child
    {
        public $url;
        public $name;
        public $subtitle;
        public $summary;
        public $date;

        public function __construct($url, $name = null, $subtitle = null, $summary = null, $date = null)
        {
            $this->url = $url;
            $this->name = $name;
            $this->subtitle = $subtitle;
            $this->summary = $summary;
            $this->date = $date;
        }
    }

    $children = [
        new Child('articulo-interes-1', 'La importancia de la salud mental', 'Explorando el bienestar emocional', 'Un artículo que resalta la importancia de mantener una buena salud mental en la vida diaria.', '2024-09-01'),
        new Child('articulo-interes-2', 'Energías renovables y el futuro', 'Sostenibilidad y medio ambiente', 'Una mirada a cómo las energías renovables están transformando el futuro del planeta.', '2024-09-05'),
        new Child('articulo-interes-3', 'Hábitos saludables para una vida mejor', 'Cuidando nuestro cuerpo', 'Consejos y hábitos que ayudan a mejorar la calidad de vida y la salud en general.', '2024-09-10'),
        new Child('articulo-interes-4', 'La tecnología en la educación', 'Transformación digital', 'Cómo la tecnología está cambiando el panorama educativo en todo el mundo.', '2024-09-15'),
        new Child('articulo-interes-5', 'El impacto del cambio climático', 'Crisis climática global', 'Un análisis del impacto del cambio climático en diferentes regiones del mundo.', '2024-09-20'),
        new Child('articulo-interes-6', 'Innovación en la industria alimentaria', 'Comida del futuro', 'Las nuevas tendencias y avances en la producción de alimentos y su impacto en la sociedad.', '2024-09-25'),
        new Child('articulo-interes-7', 'El papel de las redes sociales en la sociedad actual', 'Comunicación y tecnología', 'Cómo las redes sociales están moldeando las interacciones humanas y las comunicaciones en el mundo moderno.', '2024-09-27'),
    ];
    $destacados = [
        'Destacado 1',
        'Destacado 2',
        'Destacado 3',
    ];

    // Retornamos la vista 'home' con la variable $children
    return view('default', compact('children', 'destacados'));
})->middleware(['auth'])->name('default');
