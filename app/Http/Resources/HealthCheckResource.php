<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HealthCheckResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => (string) $this['name'],
            'version' => (float) $this['version'],
            'healthy' => (bool) $this['healthy'],
        ];
    }
}
