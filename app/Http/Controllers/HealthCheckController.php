<?php

namespace App\Http\Controllers;

use App\Services\HealthCheckService;
use App\Http\Resources\HealthCheckResource;

class HealthCheckController extends Controller
{
    /**
     * Property to be used on instance of service.
     */
    public HealthCheckService $healthCheckService;

    /**
     * Create service instance for controller.
     */
    public function __construct(HealthCheckService $healthCheckService)
    {
        $this->healthCheckService = $healthCheckService;
    }

    /**
     * Check if application is healthy.
     */
    public function check()
    {
        $healthCheck = $this->healthCheckService->check();

        return new HealthCheckResource($healthCheck);
    }
}
