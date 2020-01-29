<?php

namespace App\Repositories;

use App\Models\Time;

/**
 * Class TimeRepository.
 *
 * @version December 18, 2019, 12:21 am UTC
 */
class TimeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time',
    ];

    protected $primaryKey = 'time_id';

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
        return Time::class;
    }
}
