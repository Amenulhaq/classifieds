<?php

namespace Laraclass\Classifieds;

use User;

class Classifieds
{
    /**
     * $classified object.
     */
    protected $classified;

    /**
     * Constructor.
     */
    public function __construct(\Laraclass\Classifieds\Interfaces\ClassifiedRepositoryInterface $classified)
    {
        $this->classified = $classified;
    }

    /**
     * Returns count of classifieds.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.classified.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->classified->pushCriteria(new \Litepie\Laraclass\Repositories\Criteria\ClassifiedUserCriteria());
        }

        $classified = $this->classified->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('classifieds::' . $view, compact('classified'))->render();
    }
}
