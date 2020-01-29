<?php

namespace App\Repositories;

use App\Models\Academic;

/**
 * Class AcademicRepository.
 *
 * @version December 18, 2019, 12:23 am UTC
 */
class AcademicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year',
    ];

    protected $primaryKey = 'academic_id';

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
        return Academic::class;
    }
}
