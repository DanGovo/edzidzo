<?php

namespace App\Repositories;

use App\Models\Semester;

/**
 * Class SemesterRepository.
 *
 * @version January 4, 2020, 2:47 am UTC
 */
class SemesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description',
    ];

    protected $primaryKey = 'semester_id';

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
        return Semester::class;
    }
}
