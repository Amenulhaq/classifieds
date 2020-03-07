<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateClassifiedsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: classifieds
         */
        Schema::create('classifieds', function ($table) {
            $table->increments('id');
            $table->integer('parentcategory_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->enum('ad_status', ['rent','sale'])->nullable();
            $table->text('Features')->nullable();
            $table->text('Details')->nullable();
            $table->decimal('price', 10,2)->nullable();
            $table->date('expire_date')->nullable();
            $table->text('payment_mode')->nullable();
            $table->string('email', 255)->nullable();
            $table->text('images')->nullable();
            $table->integer('viewcount')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['active','inactive'])->nullable();
            $table->string('upload_folder', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('classifieds');
    }
}
