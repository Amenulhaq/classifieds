<?php

namespace Laraclass\Classifieds\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraclass\Classifieds\Interfaces\ClassifiedRepositoryInterface;

class ClassifiedPublicController extends BaseController
{
    // use ClassifiedWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraclass\Classified\Interfaces\ClassifiedRepositoryInterface $classified
     *
     * @return type
     */
    public function __construct(ClassifiedRepositoryInterface $classified)
    {
        $this->repository = $classified;
        parent::__construct();
    }

    /**
     * Show classified's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $classifieds = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('$classifieds::classified.names'))
            ->view('classifieds::classified.index')
            ->data(compact('classifieds'))
            ->output();
    }


    /**
     * Show classified.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $classified = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle($$classified->name . trans('classifieds::classified.name'))
            ->view('classifieds::classified.show')
            ->data(compact('classified'))
            ->output();
    }

}
