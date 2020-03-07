<?php

namespace Laraclass\Classifieds;

use DB;
use Illuminate\Database\Seeder;

class ClassifiedTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('classifieds')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'classifieds.classified.view',
                'name'      => 'View Classified',
            ],
            [
                'slug'      => 'classifieds.classified.create',
                'name'      => 'Create Classified',
            ],
            [
                'slug'      => 'classifieds.classified.edit',
                'name'      => 'Update Classified',
            ],
            [
                'slug'      => 'classifieds.classified.delete',
                'name'      => 'Delete Classified',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/classifieds/classified',
                'name'        => 'Classified',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/classifieds/classified',
                'name'        => 'Classified',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'classified',
                'name'        => 'Classified',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'pacakge'   => 'Classifieds',
                'module'    => 'Classified',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'classifieds.classified.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
