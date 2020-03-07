<?php

namespace Laraclass\Classifieds\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ClassifiedTransformer extends TransformerAbstract
{
    public function transform(\Laraclass\Classifieds\Models\Classified $classified)
    {
        return [
            'id'                => $classified->getRouteKey(),
            'key'               => [
                'public'    => $classified->getPublicKey(),
                'route'     => $classified->getRouteKey(),
            ], 
            'id'                => $classified->id,
            'parentcategory_id' => $classified->parentcategory_id,
            'category_id'       => $classified->category_id,
            'country_id'        => $classified->country_id,
            'state_id'          => $classified->state_id,
            'district_id'       => $classified->district_id,
            'area_id'           => $classified->area_id,
            'location_id'       => $classified->location_id,
            'user_id'           => $classified->user_id,
            'user_type'         => $classified->user_type,
            'title'             => $classified->title,
            'description'       => $classified->description,
            'ad_status'         => $classified->ad_status,
            'Features'          => $classified->Features,
            'Details'           => $classified->Details,
            'price'             => $classified->price,
            'expire_date'       => $classified->expire_date,
            'payment_mode'      => $classified->payment_mode,
            'email'             => $classified->email,
            'images'            => $classified->images,
            'viewcount'         => $classified->viewcount,
            'slug'              => $classified->slug,
            'status'            => $classified->status,
            'upload_folder'     => $classified->upload_folder,
            'created_at'        => $classified->created_at,
            'updated_at'        => $classified->updated_at,
            'deleted_at'        => $classified->deleted_at,
            'url'               => [
                'public'    => trans_url('classifieds/'.$classified->getPublicKey()),
                'user'      => guard_url('classifieds/classified/'.$classified->getRouteKey()),
            ], 
            'status'            => trans('app.'.$classified->status),
            'created_at'        => format_date($classified->created_at),
            'updated_at'        => format_date($classified->updated_at),
        ];
    }
}