<?php
    use App\Http\Controllers\PacienteController;
    use Illuminate\Support\Facades\Route;

    Route::get('/pacientes', [PacienteController::class, 'index']);

    Route::post('/pacientes', [PacienteController::class, 'store']);
?>