<?php

namespace App\Repositories;

use App\Models\Batch;

/**
 * Class BatchRepository.
 *
 * @version January 1, 2020, 5:20 pm UTC
 */
class BatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'year',
    ];

    protected $primaryKey = 'batch_id';

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
        return Batch::class;
    }
}
