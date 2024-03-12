<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        // Obtener el nombre de la imagen
        $imageName = $this->image;

        // Calcular el hash del nombre de la imagen
        $imageHash = md5($imageName);

        // Obtener los primeros 6 dígitos del hash
        $subfolder = substr($imageHash, 0, 6);

        // Construir la ruta de la subcarpeta en el storage
        $storagePath = 'public/' . $subfolder;

        // Mover la imagen a la subcarpeta correspondiente
        if (!Storage::disk('local')->exists($storagePath . '/' . $imageName)) {
            Storage::disk('local')->move('public/' . $imageName, $storagePath . '/' . $imageName);
        }

        // Construir la URL completa de la imagen
        $imageUrl = asset('storage/' . $subfolder . '/' . $imageName);

        return [
            'id' => $this->id,
            'text' => $this->text,
            'image' => $imageUrl,
            'project' => new ProjectResource($this->whenLoaded('project')),
            'description' => $this->description
        ];
    }
}



/*namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{*/
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
/*    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'text'=> $this->text,
            'image'=> asset('/storage/' . $this->image),
            'project'=> new ProjectResource($this->whenLoaded('project')),
            'description'=> $this->description
        ];
    }
}*/

/*
        if ($request->file()) {
            $fileName = $request->logo_url->getClientOriginalName();
            $subfolderName = substr($fileName, 0, 6);
            $filePath = $request->file('logo_url')->storeAs('abouts/' . $subfolderName, $fileName, 'public');
            $user->logo_url = '/storage/' . $filePath;
        }*/

/*
if ($request->file()) {
    $fileName = $request->logo_url->getClientOriginalName();
    $subfolderName = substr($fileName, 0, 6);
    $filePath = $request->file('logo_url')->storeAs('uploads/' . $subfolderName, $fileName, 'public');
    $user->logo_url = '/storage/' . $filePath;
}
*/