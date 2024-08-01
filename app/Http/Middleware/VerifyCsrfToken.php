<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Les URI que le middleware de vérification CSRF doit ignorer.
     *
     * @var array
     */
    protected $except = [
        // Ajoutez ici les URI que vous souhaitez exclure de la vérification CSRF
        '*', // Exemple d'exclusion pour toutes les routes API
    ];
}
