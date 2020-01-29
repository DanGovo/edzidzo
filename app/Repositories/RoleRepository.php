<?php

namespace App\Repositories;

use App\Models\Role;

/**
 * Class RoleRepository.
 *
 * @version December 18, 2019, 12:30 am UTC
 */
class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
    ];

    protected $primaryKey = 'role_id';

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
        return Role::class;
    }
}
