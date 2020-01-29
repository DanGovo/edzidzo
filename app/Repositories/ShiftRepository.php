<?php

namespace App\Repositories;

use App\Models\Shift;

/**
 * Class ShiftRepository.
 *
 * @version December 18, 2019, 12:19 am UTC
 */
class ShiftRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shift',
    ];

    protected $primaryKey = 'shift_id';

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
        return Shift::class;
    }
}
