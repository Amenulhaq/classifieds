<?php

namespace Laraclass\Classifieds\Repositories\Eloquent;

use Laraclass\Classifieds\Interfaces\ClassifiedRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ClassifiedRepository extends BaseRepository implements ClassifiedRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraclass.classifieds.classified.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraclass.classifieds.classified.model.model');
    }
}
