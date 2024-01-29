<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'text'=> $this->text,
            'image'=> asset('/storage/' . $this->image),
            'project'=> new ProjectResource($this->whenLoaded('project')),
            'description'=> $this->description
        ];
    }
}
