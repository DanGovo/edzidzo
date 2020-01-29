<?php

namespace App\Repositories;

use App\Models\Admission;
use App\Repositories\BaseRepository;

/**
 * Class AdmissionRepository
 * @package App\Repositories
 * @version December 18, 2019, 12:29 am UTC
*/

class AdmissionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Admission::class;
    }
}
