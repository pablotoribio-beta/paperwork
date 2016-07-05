<?php

    /** Check if all config lines are present.
     * If not, either the installation is damaged
     * or installation has not been done. Run the
     * Setup Wizard.
     */

    //var_dump(1);
    if(!file_exists("../app/storage/config/setup") ||
        file_get_contents("../app/storage/config/setup") == 3 && !$_SERVER['HTTP_X_REQUESTED_WITH'] ||
        file_get_contents("../app/storage/config/setup") == 4 && !$_SERVER['HTTP_X_REQUESTED_WITH'] ||
        file_get_contents("../app/storage/config/setup") == 6 && !$_SERVER['HTTP_X_REQUESTED_WITH'] ||
        file_get_contents("../app/storage/config/setup") == 5 && !$_SERVER['HTTP_X_REQUESTED_WITH'] ||
        !file_exists("../app/storage/config/paperwork.json") && !$_SERVER['HTTP_X_REQUESTED_WITH'] ||
        !file_exists("../app/storage/config/database.json") && !$_SERVER['HTTP_X_REQUESTED_WITH']) {
            //var_dump(2);
            //exit();
            header("Location: setup.php");
    }else{
        //var_dump(3);
        //exit();
        //var_dump(__DIR__);
        /**
         * Laravel - A PHP Framework For Web Artisans
         *
         * @package  Laravel
         * @author   Taylor Otwell <taylorotwell@gmail.com>
         */

        /*
        |--------------------------------------------------------------------------
        | Register The Auto Loader
        |--------------------------------------------------------------------------
        |
        | Composer provides a convenient, automatically generated class loader
        | for our application. We just need to utilize it! We'll require it
        | into the script here so that we do not have to worry about the
        | loading of any our classes "manually". Feels great to relax.
        |
        */

        //var_dump(6);
        require __DIR__.'/../bootstrap/autoload.php';

        /*
        |--------------------------------------------------------------------------
        | Turn On The Lights
        |--------------------------------------------------------------------------
        |
        | We need to illuminate PHP development, so let's turn on the lights.
        | This bootstraps the framework and gets it ready for use, then it
        | will load up this application so that we can run it and send
        | the responses back to the browser and delight these users.
        |
        */

        //var_dump(5);
        $app = require_once __DIR__.'/../bootstrap/start.php';

        /*
        |--------------------------------------------------------------------------
        | Run The Application
        |--------------------------------------------------------------------------
        |
        | Once we have the application, we can simply call the run method,
        | which will execute the request and send the response back to
        | the client's browser allowing them to enjoy the creative
        | and wonderful application we have whipped up for them.
        |
        */

        //var_dump(4);
        //exit();
        $app->run();
        //exit();
    }
