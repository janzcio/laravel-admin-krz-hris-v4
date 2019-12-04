<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

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
    protected $fillable = ['jh_id', 'user_id', 'message', 'sent_by'];

    public static function getAllMessagesByUIDJHID(){
        $data = [];
        $message = self::get();
        foreach ($message as $key => $value) {
            $data[$value->user_id][$value->jh_id] = $value;
        }
        return $data;
    }

    
}
