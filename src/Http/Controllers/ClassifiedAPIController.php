<?php

namespace Laraclass\Classifieds\Http\Controllers;

use App\Http\Controllers\APIController as BaseController;
use Laraclass\Classifieds\Http\Requests\ClassifiedRequest;
use Laraclass\Classifieds\Interfaces\ClassifiedRepositoryInterface;
use Laraclass\Classifieds\Models\Classified;
use Laraclass\Classifieds\Forms\Classified as Form;

/**
 * APIController  class for classified.
 */
class ClassifiedAPIController extends BaseController
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
        return $this->repository
            ->setPresenter(\Laraclass\Classifieds\Repositories\Presenter\ClassifiedPresenter::class)
            ->paginate();
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
        return $classified->setPresenter(\Laraclass\Classifieds\Repositories\Presenter\ClassifiedListPresenter::class);
        ;
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
            $data              = $request->all();
            $data['user_id']   = user_id();
            $data['user_type'] = user_type();
            $data              = $this->repository->create($data);
            $message           = trans('messages.success.created', ['Module' => trans('classifieds::classified.name')]);
            $code              = 204;
            $status            = 'success';
            $url               = guard_url('classifieds/classified/' . $classified->getRouteKey());
        } catch (Exception $e) {
            $message = $e->getMessage();
            $code    = 400;
            $status  = 'error';
            $url     = guard_url('classifieds/classified');
        }
        return compact('data', 'message', 'code', 'status', 'url');
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
            $data = $request->all();

            $classified->update($data);
            $message = trans('messages.success.updated', ['Module' => trans('classifieds::classified.name')]);
            $code    = 204;
            $status  = 'success';
            $url     = guard_url('classifieds/classified/' . $classified->getRouteKey());
        } catch (Exception $e) {
            $message = $e->getMessage();
            $code    = 400;
            $status  = 'error';
            $url     = guard_url('classifieds/classified/' . $classified->getRouteKey());
        }
        return compact('data', 'message', 'code', 'status', 'url');
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
            $message = trans('messages.success.deleted', ['Module' => trans('classifieds::classified.name')]);
            $code    = 202;
            $status  = 'success';
            $url     = guard_url('classifieds/classified/0');
        } catch (Exception $e) {
            $message = $e->getMessage();
            $code    = 400;
            $status  = 'error';
            $url     = guard_url('classifieds/classified/' . $classified->getRouteKey());
        }
        return compact('message', 'code', 'status', 'url');
    }

    /**
     * Return the form elements as json.
     *
     * @param String   $element
     *
     * @return json
     */
    public function form($element = 'fields')
    {
        $form = new Form();
        return $form->form($element, true);
    }

}
