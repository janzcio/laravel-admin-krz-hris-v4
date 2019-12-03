<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karlcrud extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'karlcruds';

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
    protected $fillable = ['Name', 'Address'];

    
}
