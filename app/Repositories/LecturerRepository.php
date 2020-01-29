<?php

namespace App\Repositories;

use App\Models\Lecturer;
use App\Repositories\BaseRepository;

/**
 * Class LecturerRepository
 * @package App\Repositories
 * @version December 18, 2019, 12:29 am UTC
*/

class LecturerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Lecturer::class;
    }
}
