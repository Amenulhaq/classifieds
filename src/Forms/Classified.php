<?php

namespace Laraclass\Classifieds\Forms;

class Classified
{
    /**
     * Variable to store form configuration.
     *
     * @var collection
     */
    protected $form;

    /**
     * Variable to store form configuration.
     *
     * @var collection
     */
    protected $element;

    /**
     * Initialize the form.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setForm();
    }

    /**
     * Return form elements.
     *
     * @return array.
     */
    public function form($element = 'fields', $grouped = true)
    {
        $item = collect($this->form->get($element));
        if ($element == 'fields' && $grouped == true) {
            return $item->groupBy(['group', 'section']);
        }
        return $item;

    }

    /**
     * Sets the form and form elements.
     * @return null.
     */
    public function setForm()
    {
        $this->form = collect([
            'form' => [
                'store' => [],
                'update' => [],
            ],
            'groups' => [
                'main' => 'Main',
            ],
            'fields' => [
                'parentcategory_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.parentcategory_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.parentcategory_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'category_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.category_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.category_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'country_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.country_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.country_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'state_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.state_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.state_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'district_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.district_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.district_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'area_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.area_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.area_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'location_id' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.location_id'),
                    "placeholder" => trans('classifieds::classified.placeholder.location_id'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'title' => [
                    "type" => 'text',
                    "label" => trans('classifieds::classified.label.title'),
                    "placeholder" => trans('classifieds::classified.placeholder.title'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'description' => [
                    "type" => 'text',
                    "label" => trans('classifieds::classified.label.description'),
                    "placeholder" => trans('classifieds::classified.placeholder.description'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'ad_status' => [
                    "type" => 'select',
                    "label" => trans('classifieds::classified.label.ad_status'),
                    "placeholder" => trans('classifieds::classified.placeholder.ad_status'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'Features' => [
                    "type" => 'text',
                    "label" => trans('classifieds::classified.label.Features'),
                    "placeholder" => trans('classifieds::classified.placeholder.Features'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'Details' => [
                    "type" => 'text',
                    "label" => trans('classifieds::classified.label.Details'),
                    "placeholder" => trans('classifieds::classified.placeholder.Details'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'price' => [
                    "type" => 'decimal',
                    "label" => trans('classifieds::classified.label.price'),
                    "placeholder" => trans('classifieds::classified.placeholder.price'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'expire_date' => [
                    "type" => 'date_picker',
                    "label" => trans('classifieds::classified.label.expire_date'),
                    "placeholder" => trans('classifieds::classified.placeholder.expire_date'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'payment_mode' => [
                    "type" => 'text',
                    "label" => trans('classifieds::classified.label.payment_mode'),
                    "placeholder" => trans('classifieds::classified.placeholder.payment_mode'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'email' => [
                    "type" => 'email',
                    "label" => trans('classifieds::classified.label.email'),
                    "placeholder" => trans('classifieds::classified.placeholder.email'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'images' => [
                    "type" => 'images',
                    "label" => trans('classifieds::classified.label.images'),
                    "placeholder" => trans('classifieds::classified.placeholder.images'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'viewcount' => [
                    "type" => 'numeric',
                    "label" => trans('classifieds::classified.label.viewcount'),
                    "placeholder" => trans('classifieds::classified.placeholder.viewcount'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'status' => [
                    "type" => 'select',
                    "label" => trans('classifieds::classified.label.status'),
                    "placeholder" => trans('classifieds::classified.placeholder.status'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
                'upload_folder' => [
                    "type" => 'file',
                    "label" => trans('classifieds::classified.label.upload_folder'),
                    "placeholder" => trans('classifieds::classified.placeholder.upload_folder'),
                    "rules" => '',
                    "group" => "main",
                    "section" => "first",
                    "attributes" => [
                        'wrapper' => [],
                        "label" => [],
                        "input" => [],

                    ],
                ],
            ]
        );

    }
}
