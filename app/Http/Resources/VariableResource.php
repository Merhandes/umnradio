<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VariableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @param  \Illuminate\Http\Request  $request
     * @return array
     * 
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'content' => $this->content
        ];
    }
}
