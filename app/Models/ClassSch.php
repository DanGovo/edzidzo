<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassSch
 * @package App\Models
 * @version January 7, 2020, 10:22 am UTC
 *
 * @property integer course_id
 * @property integer class_id
 */
class ClassSch extends Model
{
    use SoftDeletes;

    public $table = 'class_sch';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'class_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sch_id' => 'integer',
        'course_id' => 'integer',
        'class_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'class_id' => 'required'
    ];

    
}
