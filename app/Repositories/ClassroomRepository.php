<?php

namespace App\Repositories;

use App\Models\Classroom;

/**
 * Class ClassroomRepository.
 *
 * @version December 18, 2019, 12:14 am UTC
 */
class ClassroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status',
    ];

    protected $primaryKey = 'classroom_id';

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
        return Classroom::class;
    }
}
