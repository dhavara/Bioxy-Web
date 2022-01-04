<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'school' => $this->school,
            'city' => $this->city,
            'birthdate' => date('d-m-Y', substr($this->birthdate, 0, 10)),
            'city' => $this->city,
            'details' => [
                'user_image' => $this->detail->user_image,
                'point' => $this->detail->point,
                'user_color' => $this->detail->user_color,
                'user_frame' => $this->detail->user_frame,
                'user_title' => $this->detail->user_title,
            ]
        ];
    }
}
