<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'verified' => $this->email_verified_at ? true : false,
            'created_at' => $this->created_at,
            'userdetail' => new UserDetailResource($this->userdetail)
        ];
    }
}
