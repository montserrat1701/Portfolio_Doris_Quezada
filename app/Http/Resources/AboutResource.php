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
            'description'=> $this->description
        ];
    }
}

/*
if ($request->file()) {
    $fileName = time() . '_' . $request->logo_url->getClientOriginalName();
    $subfolderName = substr($fileName, 0, 6);
    $filePath = $request->file('logo_url')->storeAs('uploads/' . $subfolderName, $fileName, 'public');
    $user->logo_url = '/storage/' . $filePath;
}
*/