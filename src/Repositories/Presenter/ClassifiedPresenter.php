<?php

namespace Laraclass\Classifieds\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class ClassifiedPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ClassifiedTransformer();
    }
}