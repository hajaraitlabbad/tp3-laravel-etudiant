<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about-tp', function () {
    $this->info('TP 3 Laravel - Gestion des etudiants');
});
