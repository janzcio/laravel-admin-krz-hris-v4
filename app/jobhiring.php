<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class jobhiring extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobhirings';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'requirements', 'responsibilities', 'others', 'location', 'how_to_apply', 'slot', 'position', 'skill_requirement', 'available_from', 'available_to', 'email_address', 'is_active', 'user_id'];


    public static function getAllJH(){
        $data = [];
        $jh = self::get();
        foreach ($jh as $key => $value) {
            $data[$value->id] = $value->name;
        }
        return $data;
    }


    
}
