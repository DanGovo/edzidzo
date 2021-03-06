<?php

namespace App\Repositories;

use App\Models\ClassSchedule;
use App\Repositories\BaseRepository;

/**
 * Class ClassScheduleRepository
 * @package App\Repositories
 * @version January 27, 2020, 8:32 pm UTC
*/

class ClassScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'semester_id',
        'start_date',
        'end_date',
        'status'
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
        return ClassSchedule::class;
    }
}
