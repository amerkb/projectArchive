<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'bio' => $this->bio,
            'cost' => intval($this->cost),
            'parentage_executive_owner' => $this->parentage_executive_owner,
            'parentage_project_owner' => $this->parentage_project_owner,
            'project_owner' => $this->project_owner,
            'executive_owner' => $this->executive_owner,
            'payment_method' => $this->payment_method,
            'total_amount' => intval($this->total_amount),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updates' => UpdateResource::collection($this->updates),
            'payments' => PaymenttResource::collection($this->payments),
        ];
    }
}
