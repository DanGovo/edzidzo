<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Batch.
 *
 * @version January 1, 2020, 5:20 pm UTC
 *
 * @property string year
 */
class Batch extends Model
{
    use SoftDeletes;

    public $table = 'batches';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'batch_id';

    public $fillable = [
        'year',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'batch_id' => 'integer',
        'year' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'year' => 'required',
    ];
}
