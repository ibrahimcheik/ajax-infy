<?php

namespace App\Repositories;

use App\Models\Person;
use App\Repositories\BaseRepository;

/**
 * Class PersonRepository
 * @package App\Repositories
 * @version April 17, 2020, 4:31 am UTC
*/

class PersonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'genre',
        'cauntry',
        'nom',
        'prenom',
        'age',
        'date',
        'description'
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
        return Person::class;
    }
}
