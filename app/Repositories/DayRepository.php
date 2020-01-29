<?php

namespace App\Repositories;

use App\Models\Day;

/**
 * Class DayRepository.
 *
 * @version December 18, 2019, 12:24 am UTC
 */
class DayRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
    ];

    protected $primaryKey = 'day_id';

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
        return Day::class;
    }
}
