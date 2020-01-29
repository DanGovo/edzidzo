<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lecturer
 * @package App\Models
 * @version December 18, 2019, 12:29 am UTC
 *
 * @property string firstname
 * @property string surname
 * @property string dob
 * @property string gender
 * @property string email
 * @property string phone
 * @property string home_address
 * @property string nationality
 * @property string id_number
 * @property string passport_number
 * @property boolean status
 * @property string date_registered
 * @property integer user_id
 * @property string image
 */
class Lecturer extends Model
{
    use SoftDeletes;

    public $table = 'lecturers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'firstname',
        'surname',
        'dob',
        'gender',
        'email',
        'phone',
        'home_address',
        'nationality',
        'id_number',
        'passport_number',
        'status',
        'date_registered',
        'user_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lecturer_id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'dob' => 'date',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'home_address' => 'string',
        'nationality' => 'string',
        'id_number' => 'string',
        'passport_number' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required',
        'surname' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'home_address' => 'required',
        'nationality' => 'required',
        'id_number' => 'required',
        'passport_number' => 'required',
        'status' => 'required',
        'date_registered' => 'required',
        'user_id' => 'required'
    ];

    
}
