<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for classified in classifieds package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  classified module in classifieds package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Classified',
    'names'         => 'Classifieds',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Classifieds',
        'sub'   => 'Classifieds',
        'list'  => 'List of classifieds',
        'edit'  => 'Edit classified',
        'create'    => 'Create new classified'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'ad_status'           => ['rent','sale'],
            'status'              => ['active','inactive'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'parentcategory_id'          => 'Please enter parentcategory id',
        'category_id'                => 'Please enter category id',
        'country_id'                 => 'Please enter country id',
        'state_id'                   => 'Please enter state id',
        'district_id'                => 'Please enter district id',
        'area_id'                    => 'Please enter area id',
        'location_id'                => 'Please enter location id',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'title'                      => 'Please enter title',
        'description'                => 'Please enter description',
        'ad_status'                  => 'Please select ad status',
        'Features'                   => 'Please enter Features',
        'Details'                    => 'Please enter Details',
        'price'                      => 'Please enter price',
        'expire_date'                => 'Please select expire date',
        'payment_mode'               => 'Please enter payment mode',
        'email'                      => 'Please enter email',
        'images'                     => 'Please enter images',
        'viewcount'                  => 'Please enter viewcount',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'parentcategory_id'          => 'Parentcategory id',
        'category_id'                => 'Category id',
        'country_id'                 => 'Country id',
        'state_id'                   => 'State id',
        'district_id'                => 'District id',
        'area_id'                    => 'Area id',
        'location_id'                => 'Location id',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'title'                      => 'Title',
        'description'                => 'Description',
        'ad_status'                  => 'Ad status',
        'Features'                   => 'Features',
        'Details'                    => 'Details',
        'price'                      => 'Price',
        'expire_date'                => 'Expire date',
        'payment_mode'               => 'Payment mode',
        'email'                      => 'Email',
        'images'                     => 'Images',
        'viewcount'                  => 'Viewcount',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'parentcategory_id'          => ['name' => 'Parentcategory id', 'data-column' => 1, 'checked'],
        'category_id'                => ['name' => 'Category id', 'data-column' => 2, 'checked'],
        'country_id'                 => ['name' => 'Country id', 'data-column' => 3, 'checked'],
        'state_id'                   => ['name' => 'State id', 'data-column' => 4, 'checked'],
        'district_id'                => ['name' => 'District id', 'data-column' => 5, 'checked'],
        'area_id'                    => ['name' => 'Area id', 'data-column' => 6, 'checked'],
        'title'                      => ['name' => 'Title', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Classifieds',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
