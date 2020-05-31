<?php

return [

    'driver' => 'file',


    /*
    |--------------------------------------------------------------------------
    | File Driver Options
    |--------------------------------------------------------------------------
    |
    | Here you can specify any configuration options that should be used with
    | the file driver. The path option is a path to the directory with all
    | of the markdown files that will be processed inside the command.
    |
    */

    'file' => [
        'path' => 'blogs',
    ],

    'database' => [
        'table_name' => ''
    ],

    'gist' => [
        'sources' => '123123'
    ],

    'path' => 'blogs'
];
