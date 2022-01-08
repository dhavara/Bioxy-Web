<?php

namespace App\Http\Resources;

use DateTimeZone;
use Illuminate\Http\Resources\Json\JsonResource;

class UserHistoryResource extends JsonResource
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
            'username' => $this->user->username,
            'point' => $this->point,
            'accuracy' => $this->accuracy,
            'total_correct' => $this->total_correct,
            'total_question' => $this->total_question,
            'difficulty' => $this->difficultData->difficulty,
            'created_at' => date_format($this->created_at->setTimezone(new DateTimeZone('Asia/Jakarta')), 'H:i:s d-m-Y'),
        ];
    }
}
