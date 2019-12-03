<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'jobhiring_id','status'];


    // protected $hidden = [
    //     'created_at', 'updated_at','deleted_at',
    // ];
    public static function getAllapplicantByids(){
        $data = [];
        $applicant = self::get();
        foreach ($applicant as $key => $value) {
            $data[$value->user_id][$value->jobhiring_id] = $value;
        }
        return $data;
    }
}
