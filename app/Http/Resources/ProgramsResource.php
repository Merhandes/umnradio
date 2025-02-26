<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgramsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'desc' => $this->desc,
            'start_hour' => $this->start_hour,
            'end_hour' => $this->end_hour,
            'broadcast_day' => $this->broadcast_day,
            'img' => $this->img,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
