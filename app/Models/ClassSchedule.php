<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassSchedule
 * @package App\Models
 * @version January 27, 2020, 8:32 pm UTC
 *
 * @property integer course_id
 * @property integer class_id
 * @property string level_id
 * @property integer shift_id
 * @property integer classroom_id
 * @property integer batch_id
 * @property integer day_id
 * @property integer time_id
 * @property integer semester_id
 * @property string start_date
 * @property string end_date
 * @property boolean status
 */
class ClassSchedule extends Model
{
    use SoftDeletes;

    public $table = 'class_schedule';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'semester_id',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'class_id' => 'integer',
        'level_id' => 'string',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'semester_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'class_id' => 'required',
        'level_id' => 'required',
        'shift_id' => 'required',
        'classroom_id' => 'required',
        'batch_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'semester_id' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'status' => 'required'
    ];

    
}
