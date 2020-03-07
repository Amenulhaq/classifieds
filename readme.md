Lavalite package that provides classifieds management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `laraclass/classifieds`.

    "laraclass/classifieds": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Laraclass\Classifieds\Providers\ClassifiedsServiceProvider::class,

And also add it to alias

    'Classifieds'  => Laraclass\Classifieds\Facades\Classifieds::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Laraclass\\ClassifiedsTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Laraclass\Classifieds\Providers\ClassifiedsServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Laraclass\Classifieds\Providers\ClassifiedsServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Laraclass\Classifieds\Providers\ClassifiedsServiceProvider" --tag="view"


### Web Urls

**Admin**

    http://path-to-route-folder/admin/classifieds/{modulename}

**User**

    http://path-to-route-folder/user/classifieds/{modulename}

**Public**

    http://path-to-route-folder/classifieds


### API endpoints

**List**

    http://path-to-route-folder/api/user/classifieds/{modulename}
    METHOD: GET

**Create**

    http://path-to-route-folder/api/user/classifieds/{modulename}
    METHOD: POST

**Edit**

    http://path-to-route-folder/api/user/classifieds/{modulename}/{id}
    METHOD: PUT

**Delete**

    http://path-to-route-folder/api/user/classifieds/{modulename}/{id}
    METHOD: DELETE

**Public List**

    http://path-to-route-folder/api/classifieds/{modulename}
    METHOD: GET

**Public Single**

    http://path-to-route-folder/api/classifieds/{modulename}/{slug}
    METHOD: GET