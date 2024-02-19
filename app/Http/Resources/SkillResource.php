<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
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
            'name'=> $this->name,
            'image'=> asset('/storage/' . $this->image),
        ];
        /*
        if ($request->file()) {
            $fileName = $request->logo_url->getClientOriginalName();
            $subfolderName = substr($fileName, 0, 6);
            $filePath = $request->file('logo_url')->storeAs('skills/' . $subfolderName, $fileName, 'public');
            $user->logo_url = '/storage/' . $filePath;
        }*/
    }
}
