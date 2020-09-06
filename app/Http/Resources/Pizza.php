<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pizza extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $result = [];
        $result['id'] = $this->resource->id;
        $result['name'] = $this->resource->name;
        $result['description'] = $this->resource->description;
        $result['image_path'] = url($this->resource->image_path);
        $result['price'] = json_decode($this->resource->price, true);
        return $result;
    }
}
