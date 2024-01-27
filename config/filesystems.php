<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        'village_logo' => [
            'driver' => 'local',
            'root'   => public_path('media/village_logo'),
            'url'    => env('APP_URL') . '/media/village_logo',
        ],

        'about_us_banner' => [
            'driver' => 'local',
            'root'   => public_path('media/about_us_banner'),
            'url'    => env('APP_URL') . '/media/about_us_banner',
        ],

        'news_front_image' => [
            'driver' => 'local',
            'root'   => public_path('media/news_front_image'),
            'url'    => env('APP_URL') . '/media/news_front_image',
        ],

        'facility_front_image' => [
            'driver' => 'local',
            'root'   => public_path('media/facility_front_image'),
            'url'    => env('APP_URL') . '/media/facility_front_image',
        ],
        
        'public_service_front_image' => [
            'driver' => 'local',
            'root'   => public_path('media/public_service_front_image'),
            'url'    => env('APP_URL') . '/media/public_service_front_image',
        ],

        'public_service_file' => [
            'driver' => 'local',
            'root'   => public_path('media/public_service_file'),
            'url'    => env('APP_URL') . '/media/public_service_file',
        ],

        'social_media_logo' => [
            'driver' => 'local',
            'root'   => public_path('media/social_media_logo'),
            'url'    => env('APP_URL') . '/media/social_media_logo',
        ],

        'user_photo_profile' => [
            'driver' => 'local',
            'root'   => public_path('media/user_photo_profile'),
            'url'    => env('APP_URL') . '/media/user_photo_profile',
        ],

        'home_page_carausel_image' => [
            'driver' => 'local',
            'root'   => public_path('media/home_page_carausel_image'),
            'url'    => env('APP_URL') . '/media/home_page_carausel_image',
        ],


        
    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
