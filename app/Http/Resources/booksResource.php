<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class booksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'author' => $this->author,
            'publication_year' => $this->publication_year,
        ];
    }
}
