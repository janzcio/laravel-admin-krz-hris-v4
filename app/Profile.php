<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded= [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getProfileByuserId(){
    	$data = [];
        $profile = self::get();
        foreach ($profile as $key => $value) {
            $data[$value->user_id] = $value;
        }
        return $data;
    }
}