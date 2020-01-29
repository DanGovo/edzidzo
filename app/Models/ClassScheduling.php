<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassScheduling.
 *
 * @version December 18, 2019, 12:25 am UTC
 *
 * @property int course_id
 * @property int class_id
 * @property int level_id
 * @property int shift_id
 * @property int classroom_id
 * @property int batch_id
 * @property int day_id
 * @property int time_id
 * @property int semester_id
 * @property date start_date
 * @property date end_date
 * @property bool status
 */
class ClassScheduling extends Model
{
    use SoftDeletes;

    public $table = 'class_schedulings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'schedule_id';

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
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule_id' => 'integer',
        'course_id' => 'integer',
        'class_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'semester_id' => 'integer',
        'start_date',
        'end_date',
        'status' => 'boolean',
    ];

    /**
     * Validation rules.
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
        'status' => 'required',
    ];
}
