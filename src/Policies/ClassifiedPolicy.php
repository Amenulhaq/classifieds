<?php

namespace Laraclass\Classifieds\Policies;

use Litepie\User\Contracts\UserPolicy;
use Laraclass\Classifieds\Models\Classified;

class ClassifiedPolicy
{

    /**
     * Determine if the given user can view the classified.
     *
     * @param UserPolicy $user
     * @param Classified $classified
     *
     * @return bool
     */
    public function view(UserPolicy $user, Classified $classified)
    {
        if ($user->canDo('classifieds.classified.view') && $user->isAdmin()) {
            return true;
        }

        return $classified->user_id == user_id() && $classified->user_type == user_type();
    }

    /**
     * Determine if the given user can create a classified.
     *
     * @param UserPolicy $user
     * @param Classified $classified
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('classifieds.classified.create');
    }

    /**
     * Determine if the given user can update the given classified.
     *
     * @param UserPolicy $user
     * @param Classified $classified
     *
     * @return bool
     */
    public function update(UserPolicy $user, Classified $classified)
    {
        if ($user->canDo('classifieds.classified.edit') && $user->isAdmin()) {
            return true;
        }

        return $classified->user_id == user_id() && $classified->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given classified.
     *
     * @param UserPolicy $user
     * @param Classified $classified
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Classified $classified)
    {
        return $classified->user_id == user_id() && $classified->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given classified.
     *
     * @param UserPolicy $user
     * @param Classified $classified
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Classified $classified)
    {
        if ($user->canDo('classifieds.classified.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given classified.
     *
     * @param UserPolicy $user
     * @param Classified $classified
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Classified $classified)
    {
        if ($user->canDo('classifieds.classified.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
