<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'laraclass',

    /*
     * Package.
     */
    'package'   => 'classifieds',

    /*
     * Modules.
     */
    'modules'   => ['classified'],

    
    'classified'       => [
        'model' => [
            'model'                 => \Laraclass\Classifieds\Models\Classified::class,
            'table'                 => 'classifieds',
            'presenter'             => \Laraclass\Classifieds\Repositories\Presenter\ClassifiedPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'parentcategory_id',  'category_id',  'country_id',  'state_id',  'district_id',  'area_id',  'location_id',  'user_id',  'user_type',  'title',  'description',  'ad_status',  'Features',  'Details',  'price',  'expire_date',  'payment_mode',  'email',  'images',  'viewcount',  'slug',  'status',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'classifieds/classified',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraclass',
            'package'   => 'Classifieds',
            'module'    => 'Classified',
        ],

    ],
];
