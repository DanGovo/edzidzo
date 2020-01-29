<?php

namespace App\Repositories;

use App\Models\ClassSch;
use App\Repositories\BaseRepository;

/**
 * Class ClassSchRepository
 * @package App\Repositories
 * @version January 7, 2020, 10:22 am UTC
*/

class ClassSchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'class_id'
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
        return ClassSch::class;
    }
}
