<?php

use App\Http\Controllers\FormSubmissionController;

Route::post('/form-submissions', [FormSubmissionController::class, 'store']);
