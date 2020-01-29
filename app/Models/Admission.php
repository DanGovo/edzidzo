<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version December 18, 2019, 12:29 am UTC
 *
 * @property string roll_no
 * @property string firstname
 * @property string surname
 * @property string dob
 * @property string gender
 * @property string email
 * @property string phone
 * @property string nok_name
 * @property string home_address
 * @property string current_address
 * @property string nationality
 * @property string id_number
 * @property string passport_number
 * @property boolean status
 * @property string date_registered
 * @property integer user_id
 * @property integer class_id
 * @property string image
 */
class Admission extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'roll_no',
        'firstname',
        'surname',
        'dob',
        'gender',
        'email',
        'phone',
        'nok_name',
        'home_address',
        'current_address',
        'nationality',
        'id_number',
        'passport_number',
        'status',
        'date_registered',
        'user_id',
        'class_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'roll_no' => 'string',
        'firstname' => 'string',
        'surname' => 'string',
        'dob' => 'date',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'nok_name' => 'string',
        'home_address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'id_number' => 'string',
        'passport_number' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'roll_no' => 'required',
        'firstname' => 'required',
        'surname' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'nok_name' => 'required',
        'home_address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'id_number' => 'required',
        'passport_number' => 'required',
        'status' => 'required',
        'date_registered' => 'required',
        'user_id' => 'required',
        'class_id' => 'required'
    ];

    
}
