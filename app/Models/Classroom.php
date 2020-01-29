<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classroom.
 *
 * @version December 18, 2019, 12:14 am UTC
 *
 * @property string classroom_name
 * @property int classroom_code
 * @property string classroom_description
 * @property bool classroom_status
 */
class Classroom extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'classroom_id';

    public $fillable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom_id' => 'integer',
        'classroom_name' => 'string',
        'classroom_code' => 'integer',
        'classroom_description' => 'string',
        'classroom_status' => 'boolean',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'classroom_name' => 'required',
        'classroom_code' => 'required',
        'classroom_description' => 'required',
        'classroom_status' => 'required',
    ];
}
