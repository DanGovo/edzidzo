<?php

namespace App\Repositories;

use App\Models\Faculty;

/**
 * Class FacultyRepository.
 *
 * @version December 18, 2019, 12:20 am UTC
 */
class FacultyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status',
    ];

    protected $primaryKey = 'faculty_id';

    /**
     * Return searchable fields.
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return Faculty::class;
    }
}
