<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SoalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $difficulties = [];
        foreach ($this->difficulties as $difficulty) {
            array_push($difficulties, $difficulty->difficulty->difficulty);
        }
        return [
            'id' => $this->id,
            'question' => $this->question,
            'soal_image' => $this->soal_image,
            'answer_correct' => $this->answer_correct,
            'answer_1' => $this->answer_1,
            'answer_2' => $this->answer_2,
            'answer_3' => $this->answer_3,
            'answer_4' => $this->answer_4,
            'difficulties' => $difficulties
        ];
    }
}
