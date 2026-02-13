<?php
    use App\Http\Controllers\PacienteController;
    use Illuminate\Support\Facades\Route;

    Route::get('/pacientes/documento/{id}', [PacienteController::class, 'showByDocumento']);
    Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
    Route::get('/pacientes', [PacienteController::class, 'index']);
    Route::post('/pacientes', [PacienteController::class, 'store']);
    Route::put('/pacientes/{id}',[PacienteController::class, 'update']);
    Route::delete('/pacientes/{id}',[PacienteController::class, 'destroy']);
?>