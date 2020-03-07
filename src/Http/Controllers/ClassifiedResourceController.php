<?php

namespace Laraclass\Classifieds\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraclass\Classifieds\Http\Requests\ClassifiedRequest;
use Laraclass\Classifieds\Interfaces\ClassifiedRepositoryInterface;
use Laraclass\Classifieds\Models\Classified;

/**
 * Resource controller class for classified.
 */
class ClassifiedResourceController extends BaseController
{

    /**
     * Initialize classified resource controller.
     *
     * @param type ClassifiedRepositoryInterface $classified
     *
     * @return null
     */
    public function __construct(ClassifiedRepositoryInterface $classified)
    {
        parent::__construct();
        $this->repository = $classified;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraclass\Classifieds\Repositories\Criteria\ClassifiedResourceCriteria::class);
    }

    /**
     * Display a list of classified.
     *
     * @return Response
     */
    public function index(ClassifiedRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraclass\Classifieds\Repositories\Presenter\ClassifiedPresenter::class)
                ->$function();
        }

        $classifieds = $this->repository->paginate();

        return $this->response->setMetaTitle(trans('classifieds::classified.names'))
            ->view('classifieds::classified.index', true)
            ->data(compact('classifieds', 'view'))
            ->output();
    }

    /**
     * Display classified.
     *
     * @param Request $request
     * @param Model   $classified
     *
     * @return Response
     */
    public function show(ClassifiedRequest $request, Classified $classified)
    {

        if ($classified->exists) {
            $view = 'classifieds::classified.show';
        } else {
            $view = 'classifieds::classified.new';
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('classifieds::classified.name'))
            ->data(compact('classified'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new classified.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ClassifiedRequest $request)
    {

        $classified = $this->repository->newInstance([]);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('classifieds::classified.name')) 
            ->view('classifieds::classified.create', true) 
            ->data(compact('classified'))
            ->output();
    }

    /**
     * Create new classified.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ClassifiedRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $classified                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('classifieds::classified.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('classifieds/classified/' . $classified->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/classifieds/classified'))
                ->redirect();
        }

    }

    /**
     * Show classified for editing.
     *
     * @param Request $request
     * @param Model   $classified
     *
     * @return Response
     */
    public function edit(ClassifiedRequest $request, Classified $classified)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('classifieds::classified.name'))
            ->view('classifieds::classified.edit', true)
            ->data(compact('classified'))
            ->output();
    }

    /**
     * Update the classified.
     *
     * @param Request $request
     * @param Model   $classified
     *
     * @return Response
     */
    public function update(ClassifiedRequest $request, Classified $classified)
    {
        try {
            $attributes = $request->all();

            $classified->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('classifieds::classified.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('classifieds/classified/' . $classified->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('classifieds/classified/' . $classified->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the classified.
     *
     * @param Model   $classified
     *
     * @return Response
     */
    public function destroy(ClassifiedRequest $request, Classified $classified)
    {
        try {

            $classified->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('classifieds::classified.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('classifieds/classified/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('classifieds/classified/' . $classified->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple classified.
     *
     * @param Model   $classified
     *
     * @return Response
     */
    public function delete(ClassifiedRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('classifieds::classified.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('classifieds/classified'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/classifieds/classified'))
                ->redirect();
        }

    }

    /**
     * Restore deleted classifieds.
     *
     * @param Model   $classified
     *
     * @return Response
     */
    public function restore(ClassifiedRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('classifieds::classified.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/classifieds/classified'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/classifieds/classified/'))
                ->redirect();
        }

    }

}
