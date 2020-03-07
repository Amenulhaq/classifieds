# Installation

The instructions below will help you to properly install the generated package to the lavalite project.

## Location

Extract the package contents to the folder 

`/packages/laraclass/classifieds/`

## Composer

Add the below entries in the `composer.json` file's autoload section and run the command `composer dump-autoload` in terminal.

```json

...
     "autoload": {
         ...

        "classmap": [
            ...
            
            "packages/laraclass/classifieds/database/seeds",
            
            ...
        ],
        "psr-4": {
            ...
            
            "Laraclass\\Classifieds\\": "packages/laraclass/classifieds/src",
            
            ...
        }
    },
...

```

## Config

Add the entries in service provider in `config/app.php`

```php

...
    'providers'       => [
        ...
        
        Laraclass\Classifieds\Providers\ClassifiedsServiceProvider::class,
        
        ...
    ],

    ...

    'alias'             => [
        ...
        
        'Classifieds'  => Laraclass\Classifieds\Facades\Classifieds::class,
        
        ...
    ]
...

```

## Migrate

After service provider is set run the commapnd to migrate and seed the database.


    php artisan migrate
    php artisan db:seed --class=Laraclass\\ClassifiedsTableSeeder

## Publishing


**Publishing configuration**

    php artisan vendor:publish --provider="Laraclass\Classifieds\Providers\ClassifiedsServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Laraclass\Classifieds\Providers\ClassifiedsServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Laraclass\Classifieds\Providers\ClassifiedsServiceProvider" --tag="view"


## URLs and APIs


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