<?php

namespace App\Services;

class HealthCheckService
{
    /**
     * Check if application is healthy.
     */
    public function check(): array
    {
        return [
            'name' => 'POC LARAVEL',
            'version' => 0.01,
            'healthy' => true,
        ];
    }
}
