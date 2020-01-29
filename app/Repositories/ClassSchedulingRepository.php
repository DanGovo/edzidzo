<?php

namespace App\Repositories;

use App\Models\ClassScheduling;

/**
 * Class ClassSchedulingRepository.
 *
 * @version December 18, 2019, 12:25 am UTC
 */
class ClassSchedulingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'lecturer_id',
        'start_time',
        'end_time',
        'status',
    ];

    protected $primaryKey = 'schedule_id';

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
        return ClassScheduling::class;
    }
}
