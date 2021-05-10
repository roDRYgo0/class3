<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'message' => $this->message,
            'post_id' => $this->post_id,
            'post' => $this->post,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
