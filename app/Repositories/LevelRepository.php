<?php

namespace App\Repositories;

use App\Models\Level;

/**
 * Class LevelRepository.
 *
 * @version December 18, 2019, 12:16 am UTC
 */
class LevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description',
    ];

    protected $primaryKey = 'level_id';

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
        return Level::class;
    }
}
